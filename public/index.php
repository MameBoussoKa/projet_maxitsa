<?php
// filepath: /home/mame-diarra-bousso/projet_maxitsa/projet_maxitsa/public/index.php
if (file_exists(__DIR__ . '/../.env')) {
    $lines = file(__DIR__ . '/../.env');
    foreach ($lines as $line) {
        if (trim($line) && strpos($line, '=') !== false) {
            putenv(trim($line));
        }
    }
}


$routes = require_once __DIR__ . '/../route/route.web.php';

function resolve($routes) {
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // Pour un projet dans un sous-dossier, adapte ici si besoin
    $base = '/projet_maxitsa/public';
    $uri = str_replace($base, '', $uri);

    if (isset($routes[$uri])) {
        [$controller, $method] = $routes[$uri];
        $controllerClass = "App\\Controller\\$controller";
        require_once __DIR__ . "/../src/controller/{$controller}.php";
        $instance = new $controllerClass();
        $instance->$method();
    } else {
        http_response_code(404);
        echo "404 Not Found";
    }
}

resolve($routes);