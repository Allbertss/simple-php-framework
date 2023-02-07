<?php

declare(strict_types=1);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once(dirname(__DIR__) . '/vendor/autoload.php');

$request = \allberts\core\Http\Request::createFromGlobals();
$response = new \allberts\core\Http\Response(content: 'Hello');

$response->send();
