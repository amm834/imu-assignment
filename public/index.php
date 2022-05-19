<?php

use Pecee\SimpleRouter\SimpleRouter;
use Spatie\Ignition\Ignition;


require_once dirname(__DIR__) . '/vendor/autoload.php';

// load web routes
require_once dirname(__DIR__) . '/app/routes/web.php';

// Start the routing
SimpleRouter::start();

Ignition::make()->register();