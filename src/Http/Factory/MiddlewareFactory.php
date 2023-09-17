<?php
declare(strict_types=1);

namespace App\Http\Factory;

use Kentron\Template\Http\Factory\ASlimMiddlewareFactory;

use App\Http\Middleware\Audit\AuditMiddleware;

class MiddlewareFactory extends ASlimMiddlewareFactory
{
    public function audit(): callable
    {
        return parent::getMiddleware(AuditMiddleware::class);
    }
}
