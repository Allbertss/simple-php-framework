<?php

declare(strict_types=1);

use allberts\core\Http\Request;
use allberts\core\Http\Kernel;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('BASE_PATH', dirname(__DIR__));

require_once(dirname(__DIR__) . '/vendor/autoload.php');

$request = Request::createFromGlobals();

$kernel = new Kernel();

$response = $kernel->handle($request);

$response->send();
