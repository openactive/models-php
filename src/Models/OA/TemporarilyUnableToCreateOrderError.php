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
    static public function getType()
    {
        return "TemporarilyUnableToCreateOrderError";
    }

}
