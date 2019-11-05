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
    static public function getType()
    {
        return "TooManyRequestsError";
    }

}
