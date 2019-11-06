<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class InvalidPaymentDetailsError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "InvalidPaymentDetailsError";
    }

}
