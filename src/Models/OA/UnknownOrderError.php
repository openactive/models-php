<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class UnknownOrderError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "UnknownOrderError";
    }

}
