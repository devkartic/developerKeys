<?php

namespace App\E12TraitsWorkAndDrawbacks\Library;

class AllInOneCoffeeMaker
{
    // To remove conflicting method we can use `instead of` operator in php
    use CappuccinoTrait {
        CappuccinoTrait::makeLatte insteadof LatteTrait;
    }

    // To remove conflicting method we can use `alias` in php
    use LatteTrait{
        LatteTrait::makeLatte as makeOriginalLatte;
    }
}