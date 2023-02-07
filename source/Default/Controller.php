<?php

namespace App\Default;

use allberts\core\Http\Response;

class Controller
{
    public function index(): Response
    {
        return new Response('default controller');
    }

    public function test(int $id): Response
    {
        return new Response("test, passed id: {$id}");
    }
}