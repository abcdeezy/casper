<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/config/db.php';
require_once __DIR__ . '/../app/core/csrf.php';
require_once __DIR__ . '/../app/core/input.php';
require_once __DIR__ . '/../app/routes.php';

session_start();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = $routes[$uri] ?? '404.php';
require_once __DIR__ . '/../app/controllers/' . $path;
