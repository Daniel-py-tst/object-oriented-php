<?php 

namespace App\PaymentGateway\Paddle;

use App\Enums\Status;

class Transaction
{


    public function __construct(
        private float $amount,
        private string $description
    ){

    }

    public function process()
    {
        echo 'Processing paddle transaction...';
    }
}