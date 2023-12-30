<?php

namespace App\E12TraitsWorkAndDrawbacks\Library;

class CoffeeMaker
{
    public function makeCoffee(): void
    {
        echo static::class . ' is making coffee' . PHP_EOL;
    }
}