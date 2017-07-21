<?php
namespace WhmcsSI\Exception;

use ErrorException as BaseErrorException;
use WhmcsSI\Sentry\Client;

class ErrorException extends BaseErrorException
{
    public function __construct($message = null, $code = 0, $previous = null)
    {
        if ($sentryClient = Client::getInstance()) {
            $sentryClient->install();
            $sentryClient->captureException($this);
        }
    }
}
