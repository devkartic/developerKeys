<?php

use Stripe\Transaction;

ini_set('display_errors', 1);

require __DIR__ . '/PaymentProfile.php';
require __DIR__ . '/Customer.php';
require __DIR__ . '/Transaction.php';

$transaction = new Transaction(100, 'Test');

$transaction->customer = new Customer();

echo $transaction->customer?->paymentProfile?->id;