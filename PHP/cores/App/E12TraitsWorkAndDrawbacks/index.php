<?php

ini_set('display_errors', 1);

require_once __DIR__ . '/../../vendor/autoload.php';

use App\E12TraitsWorkAndDrawbacks\Library\CoffeeMaker;
use App\E12TraitsWorkAndDrawbacks\Library\LatteMaker;
use App\E12TraitsWorkAndDrawbacks\Library\CappuccinoMaker;
use App\E12TraitsWorkAndDrawbacks\Library\AllInOneCoffeeMaker;

$coffeeMaker = new CoffeeMaker();
$coffeeMaker->makeCoffee();


$latteMaker = new LatteMaker();
$latteMaker->makeCoffee();
$latteMaker->makeLatte();

$cappuccinoMaker = new CappuccinoMaker();
$cappuccinoMaker->makeCoffee();
$cappuccinoMaker->makeCappuccino();

$allInOneCoffeeMaker = new AllInOneCoffeeMaker();
$allInOneCoffeeMaker->makeLatte();
$allInOneCoffeeMaker->makeCappuccino();