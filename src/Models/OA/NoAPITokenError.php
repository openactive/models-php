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
    static public function getType()
    {
        return "NoAPITokenError";
    }

}
