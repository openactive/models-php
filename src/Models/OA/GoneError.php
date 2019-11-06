<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class GoneError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "GoneError";
    }

}
