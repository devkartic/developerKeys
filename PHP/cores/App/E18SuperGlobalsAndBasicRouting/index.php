<?php

ini_set('display_errors', 1);

require_once __DIR__ . '/../../vendor/autoload.php';

use App\E18SuperGlobalsAndBasicRouting\Library\Router;

$routers = new Router();

$routers
    ->get('/', [\App\E18SuperGlobalsAndBasicRouting\Library\Controllers\Home::class, 'index'])
    ->get('/invoices', [\App\E18SuperGlobalsAndBasicRouting\Library\Controllers\Invoice::class, 'index'])
    ->get('/invoices/create', [\App\E18SuperGlobalsAndBasicRouting\Library\Controllers\Invoice::class, 'create'])
    ->post('/invoices/create', [\App\E18SuperGlobalsAndBasicRouting\Library\Controllers\Invoice::class, 'store']);


echo $routers->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
