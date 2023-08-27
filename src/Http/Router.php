<?php

namespace App\Http;

use Kentron\Template\Http\ARouter;

final class Router extends ARouter
{
    protected static $apiRoutePath = __DIR__ . "/Api/Routes.php";
}
