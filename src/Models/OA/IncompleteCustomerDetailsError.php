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
    static public function getType()
    {
        return "IncompleteCustomerDetailsError";
    }

}
