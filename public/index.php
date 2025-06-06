<?php
// Load dependencies and environment first
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

session_start();

// Core system and routes
require_once __DIR__ . '/../app/config/db.php';
require_once __DIR__ . '/../app/core/csrf.php';
require_once __DIR__ . '/../app/core/input.php';
require_once __DIR__ . '/../app/routes.php';

// Routing logic
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// If route exists, load controller, otherwise show 404
$path = $routes[$uri] ?? '404.php';
$controllerFile = __DIR__ . '/../app/controllers/' . $path;

if (file_exists($controllerFile)) {
    require_once $controllerFile;
} else {
    http_response_code(404);
    echo "<h1>404 - Page Not Found</h1>";
}
