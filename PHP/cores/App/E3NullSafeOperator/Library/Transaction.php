<?php

declare(strict_types=1);

namespace App\E3NullSafeOperator\Library;
class Transaction
{
    public ?Customer $customer = null;

    public function __construct(
        private float $amount,
        private string $description
    ) {
        echo $this->amount;
    }
}