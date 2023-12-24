<?php

ini_set('display_errors', 1);

require_once __DIR__.'/vendor/autoload.php';

use App\E5AutoloadComposer\Library\PaymentGateway\Paddle\Transaction;

// Alias of class name if same class us in one page or long name of the class.
use App\E5AutoloadComposer\Library\PaymentGateway\Stripe\Transaction as StripeTransaction;

$paddle_object = new Transaction();
$stipe_object = new StripeTransaction();

var_dump($paddle_object, $stipe_object);