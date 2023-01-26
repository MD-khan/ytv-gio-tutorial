<?php

declare(strict_types=1);

namespace App;

class Transactions
{

    private float $amount;
    private string $description;

    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    }

    public function addTax(float $rate): Transactions
    {
        $this->amount += $this->amount * $rate / 100;
        return $this;
    }

    public function applyDiscount(float $rate): Transactions
    {
        $this->amount -= $this->amount * $rate / 100;
        return $this;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
}
