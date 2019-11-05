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
    static public function getType()
    {
        return "MethodNotAllowed";
    }

}
