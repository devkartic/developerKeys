<?php

ini_set('display_errors', 1);

require_once 'PaymentGateway/Paddle/Transaction.php';
require_once 'PaymentGateway/Paddle/CustomerProfile.php';
require_once 'Notification/Email.php';
require_once 'PaymentGateway/Stripe/Transaction.php';

use PaymentGateway\Paddle\{Transaction};
use PaymentGateway\Stripe\Transaction as StripeTransaction; // Alias of class name if same class us in one page or long name of the class.

$paddle_object = new Transaction();
$stipe_object = new StripeTransaction();

var_dump($paddle_object, $stipe_object);