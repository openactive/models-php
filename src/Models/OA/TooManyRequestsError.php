<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class TooManyRequestsError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "TooManyRequestsError";
    }

}
