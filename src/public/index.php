<?php

declare(strict_types=1);

require_once '../Transaction.php';

$transaction1 = (new Transaction(100, 'transaction 1'))
    ->addTax(6.25)
    ->applyDiscount(2)
    ->getAmount();

$transaction2 = (new Transaction(150, 'transaction 1'))
    ->addTax(6.25)
    ->applyDiscount(20)
    ->getAmount();
// $transaction->addTax(6.25)->applyDiscount(2);

//var_dump($transaction1, $transaction2);

