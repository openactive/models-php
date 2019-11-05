<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class IncompletePaymentDetailsError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "IncompletePaymentDetailsError";
    }

}
