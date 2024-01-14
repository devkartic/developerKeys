<?php

ini_set('display_errors', 1);

require_once __DIR__ . '/../../vendor/autoload.php';

use App\E17IteratingOverObjects\Library\Invoice;
use App\E17IteratingOverObjects\Library\InvoiceCollectionOne;
use App\E17IteratingOverObjects\Library\InvoiceCollectionTwo;

$invoiceCollection = new InvoiceCollectionTwo([new Invoice(15), new Invoice(25), new Invoice(50)]);

foreach ($invoiceCollection as $invoice) {
    echo $invoice->id . '-' . $invoice->amount . PHP_EOL;
}


// Type Hinting for iterable
foo(['a', 'b', 'c']);
function foo(iterable $iterable): void
{
    foreach ($iterable as $key => $item) {
        echo $key . '-' . $item . PHP_EOL;
    }
}
