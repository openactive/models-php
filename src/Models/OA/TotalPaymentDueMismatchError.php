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
    static public function getType()
    {
        return "TotalPaymentDueMismatchError";
    }

}
