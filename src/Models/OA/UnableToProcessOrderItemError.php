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
    public static function getType()
    {
        return "UnableToProcessOrderItemError";
    }

}
