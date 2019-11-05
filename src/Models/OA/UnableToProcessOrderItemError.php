<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class UnableToProcessOrderItemError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "UnableToProcessOrderItemError";
    }

}
