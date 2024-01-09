<?php

namespace App\E14SerializeObjectAndSerializeMagicMethods\Library;

class Invoice
{
    public string $id;

    public function __construct(
        public float $amount,
        public string $description,
        public string $creditCartNumber
    ) {
        $this->id = uniqid('invoice_');
    }

    public function __sleep(): array
    {
        // TODO: Implement __sleep() method.
        return ['id', 'amount'];
    }

    public function __wakeup(): void
    {
        // TODO: Implement __wakeup() method.
    }
}