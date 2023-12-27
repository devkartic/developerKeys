<?php

namespace App\E10InterfacePolymorphism\Library;

interface DebtCollector
{
    public function collect(float $owedAmount): float;
}