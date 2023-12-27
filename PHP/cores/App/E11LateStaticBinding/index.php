<?php

ini_set('display_errors', 1);

require_once __DIR__ . '/../../vendor/autoload.php';

//$classA = new \App\E11LateStaticBinding\Library\ClassA();
//$classB = new \App\E11LateStaticBinding\Library\ClassB();

//echo $classA->getName() . PHP_EOL;
//echo $classB->getName() . PHP_EOL;

echo \App\E11LateStaticBinding\Library\ClassC::getName() . PHP_EOL;
echo \App\E11LateStaticBinding\Library\ClassD::getName() . PHP_EOL;

