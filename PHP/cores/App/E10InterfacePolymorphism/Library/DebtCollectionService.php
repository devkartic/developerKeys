<?php

namespace App\E10InterfacePolymorphism\Library;

class DebtCollectionService
{
    public function collectDebt(DebtCollector $collector): void
    {
//        var_dump($collector instanceof Rocky);
        $owedAmount = mt_rand(100, 1000);
        $collectedAmount = $collector->collect($owedAmount);
        echo 'Collected $' . $collectedAmount . ' out of $' . $owedAmount . PHP_EOL;
    }
}