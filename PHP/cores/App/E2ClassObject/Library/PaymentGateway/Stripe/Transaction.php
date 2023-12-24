<?php

declare(strict_types=1);

namespace App\E2ClassObject\Library\PaymentGateway\Stripe;

use App\E2ClassObject\Library\PaymentGateway\Stripe;

class Transaction
{
    private float $amount;

    public function __construct(
        float $amount,
        private readonly string $description = 'Default transaction set from' . __CLASS__ . ' constructor'
    ) {
        $this->amount = $amount;
    }

    public function addTax(float $rate): Stripe\Transaction
    {
        $this->amount += $this->amount * $rate / 100;
        return $this;
    }

    public function applyDiscount(float $rate): Stripe\Transaction
    {
        $this->amount -= $this->amount * $rate / 100;
        return $this;
    }

    public function get(): float
    {
        return $this->amount;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo 'Destruct method called! ' . $this->description . '<br/>';
    }
}