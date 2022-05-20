<?php

use Dotenv\Dotenv;
use Pecee\SimpleRouter\SimpleRouter;
use Spatie\Ignition\Ignition;


require_once dirname(__DIR__) . '/vendor/autoload.php';

// load error handler
Ignition::make()->register();

// register dotenv
$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

// load web routes
require_once dirname(__DIR__) . '/app/routes/web.php';

// Start the routing
SimpleRouter::start();