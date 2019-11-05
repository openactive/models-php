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
    static public function getType()
    {
        return "PatchNotAllowedOnProperty";
    }

}
