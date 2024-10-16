<?php

require 'transaction.php';
$transaction = new Transaction(5,"test");
echo $transaction?->amount;