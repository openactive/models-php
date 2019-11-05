<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class TemporarilyUnableToDeleteOrderError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "TemporarilyUnableToDeleteOrderError";
    }

}
