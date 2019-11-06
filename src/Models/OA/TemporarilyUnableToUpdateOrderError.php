<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class TemporarilyUnableToUpdateOrderError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "TemporarilyUnableToUpdateOrderError";
    }

}
