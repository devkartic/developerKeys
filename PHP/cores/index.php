<?php

ini_set('display_errors', 1);

require_once __DIR__ . '/vendor/autoload.php';

use App\E18SuperGlobalsAndBasicRouting\Library\Router;

$routers = new Router();

$routers
    ->register('/', [\App\E18SuperGlobalsAndBasicRouting\Library\Controllers\Home::class, 'index'])
    ->register('/invoices', [\App\E18SuperGlobalsAndBasicRouting\Library\Controllers\Invoice::class, 'index'])
    ->register('/invoices/create', [\App\E18SuperGlobalsAndBasicRouting\Library\Controllers\Invoice::class, 'create']);


echo $routers->resolve($_SERVER['REQUEST_URI']);
