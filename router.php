<?php
$routes = require ('route.php');
$url = parse_url($_SERVER['REQUEST_URI']) ['path'];


 

function abort($code = 404) {
    http_response_code($code);
    require "Views/Partials/{$code}.php";
    die();
}
if (array_key_exists($url, $routes)) {
    require $routes[$url];
} else {
    abort();

    die();
}