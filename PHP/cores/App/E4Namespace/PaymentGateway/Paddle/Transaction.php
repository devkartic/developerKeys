<?php

namespace PaymentGateway\Paddle;

use Notification\Email;

class Transaction
{
    public function __construct()
    {
        var_dump(new CustomerProfile());
//        Full qualified with backslash '\' for search referred in global space or without it referred with local name space
//        var_dump(new \Notification\Email());
        var_dump(new Email());
    }
}