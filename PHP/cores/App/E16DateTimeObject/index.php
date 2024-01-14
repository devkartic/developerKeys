<?php

ini_set('display_errors', 1);

require_once __DIR__ . '/../../vendor/autoload.php';

$dateTime = new DateTime('05/12/2023 3.30PM');

echo $dateTime->getTimezone()->getName() . '-' . $dateTime->format('m/d/Y g:i A') . PHP_EOL;

$dateTime->setDate(2023, 4, 21)->setTime(1, 15);

$dateTime->setTimezone(new DateTimeZone('Europe/Amsterdam'));

echo $dateTime->getTimezone()->getName() . '-' . $dateTime->format('m/d/Y g:i A') . PHP_EOL;

