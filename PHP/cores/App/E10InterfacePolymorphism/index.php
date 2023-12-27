<?php

ini_set('display_errors', 1);

require_once __DIR__ . '/../../vendor/autoload.php';


$collecter = new \App\E10InterfacePolymorphism\Library\CollectionAgency();

var_dump($collecter->collect(100)) . PHP_EOL;


$service = new \App\E10InterfacePolymorphism\Library\DebtCollectionService();

//echo $service->collectDebt(new \App\E10InterfacePolymorphism\Library\CollectionAgency()) . PHP_EOL;
echo $service->collectDebt(new \App\E10InterfacePolymorphism\Library\Rocky()) . PHP_EOL;

