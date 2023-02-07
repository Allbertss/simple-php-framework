<?php

namespace allberts\core\Http;

class Request
{
    public function __construct(
        public readonly array $get,
        public readonly array $post,
        public readonly array $cookie,
        public readonly array $files,
        public readonly array $server,
    )
    {

    }

    public static function createFromGlobals(): static
    {
        return new static(
            $_GET,
            $_POST,
            $_COOKIE,
            $_FILES,
            $_SERVER,
        );
    }

    public function getPathInformation(): string
    {
        return strtok($this->server['REQUEST_URI'], '?');
    }
}