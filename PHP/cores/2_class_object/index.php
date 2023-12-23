<?php

require __DIR__ . '/Transaction.php';

$transaction = new Transaction('100', 'Test transaction');


$amount = $transaction->addTax(8)->applyDiscount(10)->get();

echo $amount.'<br/>';