<?php

namespace allberts\core\Http;

class Kernel
{
    public function handle(Request $request): Response
    {
        return new Response('kernel handler');
    }
}