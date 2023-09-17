<?php
declare(strict_types=1);

namespace App\Http\Api;

use Kentron\Template\Http\Router\ARouter;
use Kentron\Template\Http\Router\Route\Group;

use App\Core\Database\Enum\ESystemAuditType;

use App\Http\Api\Factory\ApiControllerFactory;
use App\Http\Api\Factory\ApiMiddlewareFactory;

final class ApiRouter extends ARouter
{
    public function __construct() {
        parent::__construct(
            new ApiControllerFactory(),
            new ApiMiddlewareFactory()
        );
    }

    public function load(Group $group): void
    {
        $apiGroup = $group->group("api");

        $this->loadSession($apiGroup);
        $this->loadSystem($apiGroup);

        // $apiGroup->addMiddleware($this->getMiddlewareFactory()->audit());
        // $apiGroup->addMiddleware($this->getMiddlewareFactory()->getAuth());
    }

    protected function getControllerFactory(): ApiControllerFactory
    {
        return parent::getControllerFactory();
    }

    protected function getMiddlewareFactory(): ApiMiddlewareFactory
    {
        return parent::getMiddlewareFactory();
    }

    /**
     * Private
     */

    /**
     * Session endpoints
     *
     * @param Group $group
     *
     * @return void
     */
    private function loadSession(Group $group): void
    {
        $sessionGroup = $group->group("session");

        $sessionGroup
            ->get()
            ->setController($this->getControllerFactory()->session("get"))
            ->setName(ESystemAuditType::GetSession->value)
        ;

        // $sessionIdGroup = $sessionGroup->group("{session_id:[0-9]+}");

        // $sessionIdGroup->addMiddleware($this->getMiddlewareFactory()->getSession());
    }

    /**
     * System getters
     *
     * @param Group $group
     *
     * @return void
     */
    private function loadSystem(Group $group): void
    {
        $systemGroup = $group->group("system");

        // $systemGroup
        //     ->post("encrypt")
        //     ->setController($this->getControllerFactory()->systemEncrypt("post"))
        //     ->setName(ESystemAuditType::GetEncryptedText->value)
        // ;

        // $systemGroup
        //     ->post("decrypt")
        //     ->setController($this->getControllerFactory()->systemDecrypt("post"))
        //     ->setName(ESystemAuditType::GetDecryptedText->value)
        // ;
    }
}
