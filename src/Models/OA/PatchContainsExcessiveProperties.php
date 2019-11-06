<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class PatchContainsExcessiveProperties extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "PatchContainsExcessiveProperties";
    }

}
