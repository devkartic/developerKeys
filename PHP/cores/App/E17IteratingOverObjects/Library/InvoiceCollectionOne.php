<?php

namespace App\E17IteratingOverObjects\Library;

class InvoiceCollectionOne implements \Iterator
{

    public function __construct(public array $invoices)
    {
//        var_dump($this->invoices);
    }

    public function current(): mixed
    {
        echo __METHOD__ . PHP_EOL;

        return current($this->invoices);
    }

    public function next(): void
    {
        echo __METHOD__ . PHP_EOL;

        next($this->invoices);
    }

    public function key(): mixed
    {
        echo __METHOD__ . PHP_EOL;

        return key($this->invoices);
    }

    public function valid(): bool
    {
        echo __METHOD__ . PHP_EOL;

        return current($this->invoices) !== false;
    }

    public function rewind(): void
    {
        echo __METHOD__ . PHP_EOL;

        reset($this->invoices);
    }
}