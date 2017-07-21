## Installation

> Since the WHMCS is developed using a composer but without its configuration json file,
> there is no availability to use `vendor` folder for composer. Therefore we will add `custom` folder
> inside the `vendor` and use it for our composer by adding `vendor-dir` option.


Step-by-step actions to run composer over WHMCS in subfolder:
1. Install [Composer](https://getcomposer.org/)
2. Run `cumposer init` to create composer.json file
3. Add `"vendor-dir": "vendor/custom"` into composer.json
4. Create folder `/vendor/custom`
5. Add the line below into the 5th line of `/vendor/autoload.php`
```
require __DIR__ . '/custom/autoload.php';
```

After that it becomes possible to install Sentry Integration. To do this run the next command:

```sh
composer require senikz/whmcs-sentry-integrations
```

## Configuration

1. Turn On 'exceptions interceptor'. To do this modify the `use` block of the file `/vendor/filp/whoops/src/Whoops/Exception/ErrorException.php` by changing `use ErrorException` to `use \WhmcsSI\Exception\ErrorException`.
2. Put the lines below into `/configuration.php` file:
	```
	$sentry_enable = true;
	$sentry_project_link = '<link_to_your_project>';
	```
3. Optionally you can also put the next lines too:
```
$project_environment = '';
$project_version = '';
```
