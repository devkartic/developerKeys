<?php
declare(strict_types=1);

class Transaction
{
    private float $amount;

    public function __construct(
        float                   $amount,
        private readonly string $description = 'Default transaction set from' . __CLASS__ . ' constructor'
    )
    {
        $this->amount = $amount;
    }

    public function addTax(float $rate): Transaction
    {
        $this->amount += $this->amount * $rate / 100;
        return $this;
    }

    public function applyDiscount(float $rate): Transaction
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