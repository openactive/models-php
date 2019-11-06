<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class PatchNotAllowedOnProperty extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "PatchNotAllowedOnProperty";
    }

}
