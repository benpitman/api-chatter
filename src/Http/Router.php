<?php

namespace App\Http;

use Kentron\Template\Http\Router\Adapter\RouteAdapterSlim;
use Kentron\Template\Http\Router\Route\Group;

use App\Chatter;
use App\Http\Api\ApiRouter;

final class Router
{
    /**
     * Loads all routes
     * @param Chatter $app This application
     */
    public static function loadAllRoutes(Chatter $app): void
    {
        $rootGroup = new Group();

        (new ApiRouter())->load($rootGroup);
        // SystemRouter::load($rootGroup);
        // var_dump($rootGroup);die;

        (new RouteAdapterSlim($rootGroup, $app))->translate();
    }
}
