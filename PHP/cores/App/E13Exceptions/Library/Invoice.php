<?php

namespace App\E13Exceptions\Library;

class Invoice
{
    public function __construct(public Customer $customer)
    {
    }

    public function process(float $amount): void
    {
        echo 'Processing $' . $amount . ' invoice - ';
        sleep(1);
        echo 'OK' . PHP_EOL;
    }
}