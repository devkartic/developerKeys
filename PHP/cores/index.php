<?php

ini_set('display_errors', 1);

require_once __DIR__ . '/vendor/autoload.php';

use App\E19MVC\Library\Router;

session_start();
const STORAGE_PATH = __DIR__ . '/App/E19MVC/storage';
const VIEW_PATH = __DIR__ . '/App/E19MVC/views';

$routers = new Router();
try {
    $routers
        ->get('/', [\App\E19MVC\Library\Controllers\HomeController::class, 'index'])
        ->post('/upload', [\App\E19MVC\Library\Controllers\HomeController::class, 'upload'])
        ->get('/invoices', [\App\E19MVC\Library\Controllers\InvoiceController::class, 'index'])
        ->get('/invoices/create', [\App\E19MVC\Library\Controllers\InvoiceController::class, 'create'])
        ->get('/invoices/create', [\App\E19MVC\Library\Controllers\InvoiceController::class, 'store']);

    echo $routers->resolve(
        $_SERVER['REQUEST_URI'],
        strtolower($_SERVER['REQUEST_METHOD'])
    );
} catch (\App\E19MVC\Exception\RouteNotFoundException $exception){
    http_response_code(404);
    echo \App\E19MVC\Library\View::make('errors/404');
}