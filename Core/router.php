<?php

namespace Core;
class Router
{
    protected $routes = [];

    public function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            ];

        return $this;
    }

    public function get($uri, $controller)
    {
        return $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller)
    {
        return $this->add('POST', $uri, $controller);
    }

    public function delete($uri, $controller)
    {
        return $this->add('DELETE', $uri, $controller);
    }

    public function patch($uri, $controller)
    {
        return $this->add('PATCH', $uri, $controller);
    }

    public function put($uri, $controller)
    {
        return $this->add('PUT', $uri, $controller);
    }

public function routes($uri, $method)
{
    foreach ($this->routes as $route) {
        if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
            require base_path($route['controller']);
            return;
        }
    }

    $this->abort();
}

function abort() {
            http_response_code( Response::HTTP_NOT_FOUND);
    require base_path('views/404.php');

    die();
}
}



