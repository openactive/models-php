<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class UnknownOrderError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "UnknownOrderError";
    }

}
