<?php

namespace allberts\core\Http;

use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

class Kernel
{
    public function handle(Request $request): Response
    {
        $dispacher = simpleDispatcher(function (RouteCollector $routeCollector) {
            $routes = include BASE_PATH . '/route/web.php';

            foreach ($routes as $route) {
                $routeCollector->addRoute(...$route);
            }
        });

        $routeInfo = $dispacher->dispatch(
            $request->server['REQUEST_METHOD'],
            $request->getPathInformation(),
        );

        [$statusCode, [$controller, $method], $variables] = $routeInfo;

        return call_user_func_array([new $controller, $method], $variables);
    }
}