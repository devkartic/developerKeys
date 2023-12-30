<?php

namespace App\E12TraitsWorkAndDrawbacks\Library;

trait CappuccinoTrait
{
    public function makeCappuccino(): void
    {
        echo static::class . ' is making cappuccino' . PHP_EOL;
    }

//    Make presidency trait method that override the Base class
    public function makeCoffee(): void
    {
        echo static::class . ' is making Coffee (UPDATED)' . PHP_EOL;
    }

    public function makeLatte(): void
    {
        echo static::class . ' is making Coffee (Cappuccino Trait)' . PHP_EOL;
    }




}