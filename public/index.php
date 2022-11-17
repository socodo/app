<?php

use Socodo\Framework\Application;
use Socodo\Http\ServerRequest;

/**
 * Load composer autoloader.
 */
require_once __DIR__  . '/../vendor/autoload.php';

/**
 * Execute an application.
 */
$app = new Application();
$response = $app->handle(ServerRequest::fromGlobals());
$app->terminate($response);