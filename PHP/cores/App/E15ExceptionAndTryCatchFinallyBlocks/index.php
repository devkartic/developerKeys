<?php

ini_set('display_errors', 1);

require_once __DIR__ . '/../../vendor/autoload.php';

use App\E15ExceptionAndTryCatchFinallyBlocks\Library\Invoice;
use App\E15ExceptionAndTryCatchFinallyBlocks\Library\Customer;

//$invoice = new Invoice(new Customer(['email'=> 'test@gmail.com']));
$invoice = new Invoice(new Customer());

// Custom exception handling

try {
    $invoice->process(-25);
} catch (\Exception $exception) {
    echo $exception->getMessage() . ' ' . $exception->getFile() . ':' . $exception->getLine() . PHP_EOL;
} finally {
    echo 'Finally block' . PHP_EOL;
}

// Global exception handling

set_exception_handler(function (\Throwable $exception) {
    var_dump($exception->getMessage());
});

echo array_rand([], 1);

// Or

try {
    echo array_rand([], 1);
} catch (\Throwable $exception) {
    echo $exception->getMessage() . PHP_EOL;
}
