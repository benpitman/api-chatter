<?php
declare(strict_types=1);

namespace App\Http\Api\Factory;

use App\Http\Factory\MiddlewareFactory;

use App\Http\Api\Middleware\Auth\AuthMiddleware;
use App\Http\Api\Middleware\Session\SessionMiddleware;

final class ApiMiddlewareFactory extends MiddlewareFactory
{
    public function getAuth(): callable
    {
        return parent::getMiddleware(AuthMiddleware::class);
    }

    public function getSession(): callable
    {
        return parent::getMiddleware(SessionMiddleware::class);
    }
}
