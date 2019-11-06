<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class IncompleteCustomerDetailsError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "IncompleteCustomerDetailsError";
    }

}
