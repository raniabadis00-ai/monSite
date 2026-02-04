<?php

namespace App\Core;

class App {

    public static function run(): void
    {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/'; // /user, /, /product, / contact

        $routes = [
            '/' => [\App\Controller\HomeController::class, 'index'],
            '/contact' => [\App\Controller\HomeController::class, 'contact'] // -> page contact
        ];

        if (isset($routes[$path])) {
            [$controllerClass,$methodname] = $routes[$path];

            (new $controllerClass())->$methodname();
            return;
        }

        http_response_code(404);
        echo '404 Not Found';
    }
}