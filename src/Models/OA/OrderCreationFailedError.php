<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class OrderCreationFailedError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "OrderCreationFailedError";
    }

}
