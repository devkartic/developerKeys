<?php

ini_set('display_errors', 1);

require_once __DIR__ . '/../../vendor/autoload.php';

use App\E6ClassConstant\Library\Transaction;
use App\E6ClassConstant\Library\Enums\Status;

$transaction = new Transaction();

$transaction->setStatus(Status::PENDING);

var_dump($transaction);