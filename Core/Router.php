<?php

namespace Core;


class Router
{
    protected $routes = [];


    public function get($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'GET',
        ];
    }

    public function post($uri, $controller)
    {
    }

    public function patch($uri, $controller)
    {
    }

    public function put($uri, $controller)
    {
    }

    public function delete($uri, $controller)
    {
    }
}
// $routes = require base_path('routes.php');


// function routeToController($uri, $routes)
// {
//     if (array_key_exists($uri, $routes)) {
//         require base_path($routes[$uri]);
//     } else {
//         abort();
//     }
// }

// function abort($code = 404)
// {
//     http_response_code($code);

//     require base_path("views/{$code}.php");

//     die();
// }

// $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// routeToController($uri, $routes);
