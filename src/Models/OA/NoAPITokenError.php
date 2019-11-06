<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class NoAPITokenError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "NoAPITokenError";
    }

}
