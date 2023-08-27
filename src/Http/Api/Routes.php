<?php

// Api Routes

use App\App;
use App\Http\Factory\ControllerFactory;
use Slim\Interfaces\RouteCollectorProxyInterface;

/** @var App $app */
$apiGroup = $app->group("/api", function (RouteCollectorProxyInterface $route) {
    $route->get("[/]", ControllerFactory::getApi("get"));
});
