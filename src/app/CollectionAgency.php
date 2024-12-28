<?php
namespace App;

class CollectionAgency implements DebtCollector
{
    
    public function collect(float $owedAmount): float
    {
        $gaurenteed = $owedAmount * 0.5;
        return mt_rand($gaurenteed, $owedAmount);

    }
}