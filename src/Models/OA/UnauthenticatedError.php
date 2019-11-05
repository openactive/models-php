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
    static public function getType()
    {
        return "UnauthenticatedError";
    }

}
