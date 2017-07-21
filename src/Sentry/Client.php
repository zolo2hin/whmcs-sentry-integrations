<?php
namespace WhmcsSI\Sentry;

use Raven_Client;

class Client
{
    public static function getInstance()
    {
        include ROOTDIR . '/configuration.php';
        if (!empty($sentry_enable) && !empty($sentry_project_link)) {

			$details = [];

			if(!empty($project_environment)) {
				$details['environment'] = $project_environment;
			}
			if(!empty($project_version)) {
				$details['release'] = $project_version;
			}

            return new Raven_Client($sentry_project_link, $details);
        }
    }

}
