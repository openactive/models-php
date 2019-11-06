<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class UnauthenticatedError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "UnauthenticatedError";
    }

}
