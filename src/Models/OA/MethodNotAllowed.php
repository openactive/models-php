<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class MethodNotAllowed extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "MethodNotAllowed";
    }

}
