<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class InvalidAPITokenError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "InvalidAPITokenError";
    }

}
