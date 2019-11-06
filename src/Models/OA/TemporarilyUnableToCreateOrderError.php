<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class TemporarilyUnableToCreateOrderError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "TemporarilyUnableToCreateOrderError";
    }

}
