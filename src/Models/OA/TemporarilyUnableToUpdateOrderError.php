<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class TemporarilyUnableToUpdateOrderError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "TemporarilyUnableToUpdateOrderError";
    }

}
