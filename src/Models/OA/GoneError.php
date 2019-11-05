<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class GoneError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "GoneError";
    }

}
