<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class TemporarilyUnableToDeleteOrderError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "TemporarilyUnableToDeleteOrderError";
    }

}
