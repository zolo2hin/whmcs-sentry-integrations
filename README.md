## Installation
>Since the WHMCS is developed using a composer but without its configuration json file, this package should be installed manually by adding classes to composer autoloder.

1. Add the code below into autoload_psr4.php
    ```
        'WhmcsSE\\' => array($vendorDir . '/senikz/whmcs-sentry-exceptions/src'),
    ```
2. Add the code below into autoload_static.php
    * into the ``$prefixLengthsPsr4`` under ``W`` section:
    ```
    	'WhmcsSE\\' => 8,
    ```
    * into the ``$prefixDirsPsr4``:
    ```
    'WhmcsSE\\' =>
		array(
			0 => __DIR__ . '/..' . '/senikz/whmcs-sentry-exceptions/src',
		),
	```
3. Put package files into the `/vendor/senikz/whmcs-sentry-exceptions` folder
4. Change `use` section in native `Whoops` package. Replace `use ErrorException` to `use \WhmcsSE\Exception\ErrorException`
