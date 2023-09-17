<?php
declare(strict_types=1);

namespace App\Http\Api\Factory;

use App\Http\Api\Controller\Session\ApiSessionController;
use App\Http\Factory\ControllerFactory;

final class ApiControllerFactory extends ControllerFactory
{
    public function system(string $method): callable
    {
        return $this->getController(ApiSystemController::class, $method);
    }

    public function session(string $method): callable
    {
        return $this->getController(ApiSessionController::class, $method);
    }
}
