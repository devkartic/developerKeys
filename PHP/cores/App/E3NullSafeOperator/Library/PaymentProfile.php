<?php

namespace App\E3NullSafeOperator\Library;

class PaymentProfile
{
    public int $id;

    public function __construct()
    {
        $this->id = rand();
    }

}