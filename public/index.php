<?php
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

session_start();

require_once __DIR__ . '/../app/config/db.php';
require_once __DIR__ . '/../app/core/csrf.php';
require_once __DIR__ . '/../app/core/input.php';
require_once __DIR__ . '/../app/routes.php';

$uri = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

$basePath = '/casper/public';

// Remove base path if present
if (strpos($uri, $basePath) === 0) {
    $uri = substr($uri, strlen($basePath));
}

if ($uri === '') {
    $uri = '/';
}

$path = $routes[$uri] ?? '404.php';
$controllerFile = __DIR__ . '/../app/controllers/' . $path;

if (file_exists($controllerFile)) {
    require_once $controllerFile;
} else {
    http_response_code(404);
    echo "<h1>404 - Page Not Found</h1>";
}
