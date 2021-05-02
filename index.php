<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';

date_default_timezone_set(config('TIMEZONE', 'Europe/Istanbul'));

$app = new \Core\Bootstrap();

require __DIR__ . '/app/route.php';

$app->run();