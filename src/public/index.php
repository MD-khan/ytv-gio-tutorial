<?php

use App\Enums\Status;
use App\PaymentGateway\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php';

try {
    // Create a new transaction
    $transaction = new Transaction();
    // Set the status of the transaction to 'paid'
    $transaction->setStatus(Status::PAID);

    // Dump the transaction object to see its properties
    var_dump($transaction);
    // Dump all the possible statuses of a transaction
    var_dump(Status::getAllStatuses());
} catch (\InvalidArgumentException $e) {
    // Catch any exception that may be thrown by the code
    echo $e->getMessage();
}

//var_dump(\Ramsey\Uuid\UuidFactory());

// require_once '../Transaction.php';

// $transaction1 = (new Transaction(100, 'transaction 1'))
//     ->addTax(6.25)
//     ->applyDiscount(2)
//     ->getAmount();

// $transaction2 = (new Transaction(150, 'transaction 1'))
//     ->addTax(6.25)
//     ->applyDiscount(20)
//     ->getAmount();
// // $transaction->addTax(6.25)->applyDiscount(2);

// //var_dump($transaction1, $transaction2);
