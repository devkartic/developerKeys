<?php

namespace App\E12TraitsWorkAndDrawbacks\Library;

use App\E12TraitsWorkAndDrawbacks\Library\CoffeeMaker;

class CappuccinoMaker extends CoffeeMaker
{
    use CappuccinoTrait;

//    Re-defined and override trait method
    public function makeCappuccino(): void
    {
        echo static::class . 'Making Cappuccino (UPDATED)' . PHP_EOL;
    }
}