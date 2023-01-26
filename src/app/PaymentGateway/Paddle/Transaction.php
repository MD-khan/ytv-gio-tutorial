<?php
declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

use App\Enums\Status;

/**
 * Class Transaction
 *
 * This class represents a transaction in the Paddle payment gateway.
 */
class Transaction
{
    /**
     * @var string $status The status of the transaction.
     */
    private string $status;

    /**
     * Transaction constructor.
     *
     * Sets the status of the transaction to pending by default.
     */
    public function __construct()
    {
        $this->setStatus(Status::PENDING);
    }

    /**
     * Set the status of the transaction.
     *
     * @param string $status The status of the transaction.
     *
     * @return self The current instance of the Transaction class.
     *
     * @throws \InvalidArgumentException If the status is not a valid one.
     */
    public function setStatus(string $status): self
    {
        if (!Status::isValidStatus($status)) {
            throw new \InvalidArgumentException('Invalid Status');
        }

        $this->status = $status;

        return $this;
    }

    /**
     * Get the status of the transaction.
     *
     * @return string The status of the transaction.
     */
    public function getStatus(): string
    {
        return $this->status;
    }
}
