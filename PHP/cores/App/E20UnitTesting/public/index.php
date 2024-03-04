<?php

ini_set('display_errors', 1);

require_once __DIR__ . '/../../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

use App\E20UnitTesting\Library\Router;
use App\E20UnitTesting\App;
session_start();
const STORAGE_PATH = __DIR__ . '/../storage';
const VIEW_PATH = __DIR__ . '/../views';

$router = new Router();

$router
    ->get('/', [\App\E20UnitTesting\Library\Controllers\HomeController::class, 'index'])
    ->post('/upload', [\App\E20UnitTesting\Library\Controllers\HomeController::class, 'upload'])
    ->get('/invoices', [\App\E20UnitTesting\Library\Controllers\InvoiceController::class, 'index'])
    ->get('/invoices/create', [\App\E20UnitTesting\Library\Controllers\InvoiceController::class, 'create'])
    ->get('/invoices/create', [\App\E20UnitTesting\Library\Controllers\InvoiceController::class, 'store']);

(new App(
    $router,
    ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']],
    new \App\E20UnitTesting\Config($_ENV)
))->run();