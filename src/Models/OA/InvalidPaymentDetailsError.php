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
    static public function getType()
    {
        return "InvalidPaymentDetailsError";
    }

}
