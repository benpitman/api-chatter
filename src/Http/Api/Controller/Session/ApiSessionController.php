<?php

namespace App\Http\Api\Controller\Session;

use App\Http\Api\Controller\AApiController;

final class ApiSessionController extends AApiController
{
    public function get(): void
    {
        $this->transportEntity->setData(["test" => "hello"]);
    }
}
