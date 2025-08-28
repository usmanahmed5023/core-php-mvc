<?php
$routes=require base_path('routes.php');
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// $base = '/core-php-mvc';


// $uri = str_replace($base, '', $uri);

// Routes
// if ($uri === '/' || $uri === '/index.php') {
//     require 'controllers/index.php';
// } else if ($uri === '/about') {
//     require 'controllers/about.php';
// } 
// else if ($uri === '/notes') {
//     require 'controllers/notes.php';
// }else if ($uri === '/note') {
//     require 'controllers/note.php';
// }else if ($uri === '/contact') {
//     require 'controllers/contact.php';
// } else {
//    abort();
// }


function routeToController($uri, $routes) {
    if(array_key_exists($uri, $routes)){
        require base_path($routes[$uri]);
    } else {
        abort();
    }
}

function abort() {
            http_response_code( Response::HTTP_NOT_FOUND);
    require base_path('views/404.php');

    die();
}
routeToController($uri,$routes);