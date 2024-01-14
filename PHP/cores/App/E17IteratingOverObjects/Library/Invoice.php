<?php

namespace App\E17IteratingOverObjects\Library;

class Invoice
{
    public string $id;

    public function __construct(public float $amount)
    {
        $this->id = rand(1000, 9999);
    }
}