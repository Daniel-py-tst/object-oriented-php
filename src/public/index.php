<?php

require __DIR__ . '/../vendor/autoload.php'; 

$collectionAgency = new \App\CollectionAgency();
$service = new \App\DebtCollectionService();

echo $service->collectDebt($collectionAgency);
