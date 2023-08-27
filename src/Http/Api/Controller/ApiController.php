<?php

namespace App\Http\Api\Controller;

use App\Http\Api\Controller\AApiController;

final class ApiController extends AApiController
{
    public function get()
    {
        echo "hello";
        $this->transportEntity->setData(["test" => "testing"]);
    }
}
