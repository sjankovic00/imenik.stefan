<?php
ini_set('session.save_path', '/var/www/imenik.stefan/sessions');
session_start();

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/function.php';
require base_path('Core/Database.php');

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require base_path("$class.php");
});

require base_path('Core/Router.php');

$router = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = rtrim($uri, '/');

if ($uri === '' || $uri === '/index.php') {
    $uri = '/';
}

$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
