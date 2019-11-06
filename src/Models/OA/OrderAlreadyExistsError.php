<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class OrderAlreadyExistsError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "OrderAlreadyExistsError";
    }

}
