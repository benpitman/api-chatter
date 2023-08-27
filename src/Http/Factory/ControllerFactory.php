<?php

namespace App\Http\Factory;

use Kentron\Factory\AControllerFactory;

use App\Http\Api\Controller\ApiController;

final class ControllerFactory extends AControllerFactory
{
    public static function getApi(string $method): callable
    {
        return parent::getController(ApiController::class, $method);
    }
}
