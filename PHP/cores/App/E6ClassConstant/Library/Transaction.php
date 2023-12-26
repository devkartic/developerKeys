<?php

namespace App\E6ClassConstant\Library;

use App\E6ClassConstant\Library\Enums\Status;

class Transaction
{
    private string $status;

    public function __construct()
    {
        $this->setStatus('Pending');
    }

    public function setStatus(string $status): self
    {
        if (!isset(Status::STATUSES[$status])) {
            throw new \InvalidArgumentException('Invalid status');
        }
        $this->status = $status;
        return $this;
    }
}