<?php
namespace WhmcsSE\Exception;

use ErrorException as BaseErrorException;
use WhmcsSE\Sentry\Client;

class ErrorException extends BaseErrorException
{
	public function __construct($message = null, $code = 0, $previous = null) {

var_dump( debug_backtrace() );
exit;
		/*var_dump($this);

		exit;

		/*var_dump($client);
exit;
		var_dump('error exception');
		var_dump($smessage);
		var_dump($code);
		var_dump($previous);
		exit;*/
	}
}
