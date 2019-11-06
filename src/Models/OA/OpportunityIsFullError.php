<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class OpportunityIsFullError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "OpportunityIsFullError";
    }

}
