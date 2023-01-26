<?php

namespace App\Enums;

/**
 * Class Status
 *
 * Enum class to represent the possible statuses of a transaction.
 */
class Status
{

    /**
     * @var string PAID The transaction was paid.
     */
    const PAID = 'paid';

    /**
     * @var string PENDING The transaction is pending.
     */
    const PENDING = 'pending';

    /**
     * @var string DECLINED The transaction was declined.
     */
    const DECLINED = 'declined';

    /**
     * @var array ALL_STATUS All the possible statuses of a transaction.
     */
    private const ALL_STATUS = [
        self::PAID => 'Paid',
        self::PENDING => 'Pending',
        self::DECLINED => 'Declined'
    ];

    /**
     * Check if a status is a valid one.
     *
     * @param string $status The status to check.
     *
     * @return bool True if the status is valid, false otherwise.
     */
    public static function isValidStatus(string $status): bool
    {
        return array_key_exists($status, self::ALL_STATUS);
    }

    /**
     * Get all the possible statuses of a transaction.
     *
     * @return array All the possible statuses of a transaction.
     */
    public static function getAllStatuses(): array
    {
        return self::ALL_STATUS;
    }
}
