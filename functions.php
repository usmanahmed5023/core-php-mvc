<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}
function authorize($condition,$statusCode = 403){
    if(!$condition){
        http_response_code($statusCode);
        require 'views/403.php';
        die();
    }
}
// function base_path($path){
//     return BASE_PATH . $path;
// }