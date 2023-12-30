<?php

namespace App\E12TraitsWorkAndDrawbacks\Library;

trait LatteTrait
{
    public function makeLatte(): void
    {
        echo static::class . ' is making latte' . PHP_EOL;
    }
}