<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class TotalPaymentDueMismatchError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "TotalPaymentDueMismatchError";
    }

}
