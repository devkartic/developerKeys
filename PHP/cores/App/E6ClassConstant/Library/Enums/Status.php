<?php

namespace App\E6ClassConstant\Library\Enums;

// Called lookup tables
class Status
{
    public const PAID = "Paid";
    public const PENDING = "Pending";
    public const DECLINED = "Declined";

    public const STATUSES = [
        self::PAID => 'Paid',
        self::PENDING => 'Pending',
        self::DECLINED => 'Declined',
    ];
}