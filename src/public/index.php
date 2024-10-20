<?php

require __DIR__ . '/../vendor/autoload.php'; 


use App\PaymentGateway\Paddle\Transaction;
use App\Enums\Status;


$transaction = new Transaction(40, "transaction 1");


var_dump($transaction::getCount());
