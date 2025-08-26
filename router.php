<?php
// Current URI
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Project ka base folder
$base = '/core-php-mvc';

// Remove base from URI
$uri = str_replace($base, '', $uri);
function abort() {
    http_response_code(404);
    require 'views/404.php';
    die();
}
// Routes
if ($uri === '/' || $uri === '/index.php') {
    require 'controllers/index.php';
} else if ($uri === '/about') {
    require 'controllers/about.php';
} 
else if ($uri === '/notes') {
    require 'controllers/notes.php';
}else if ($uri === '/note') {
    require 'controllers/note.php';
}else if ($uri === '/contact') {
    require 'controllers/contact.php';
} else {
   abort();
}