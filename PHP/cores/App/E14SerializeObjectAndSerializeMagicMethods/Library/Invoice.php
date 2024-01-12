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

    /*
     * If exist the __serialize method then it will be get presidency and simple ignored the __sleep method
     */
    public function __serialize(): array
    {
        // TODO: Implement __serialize() method.
        return [
            'id' => $this->id,
            'amount' => $this->amount,
            'description' => $this->description,
            'creditCartNumber' => base64_encode(12345),
            'foo' => 'bar'
        ];
    }

    /*
     * If exist the __unserialize method then it will be get presidency and simple ignored the __wakeup method
     */
    public function __unserialize(array $data): void
    {
        $this->id = $data['id'];
        $this->amount = $data['amount'];
        $this->description = $data['description'];
        $this->creditCartNumber = base64_decode($data['creditCartNumber']);
//        var_dump($data);
    }
}