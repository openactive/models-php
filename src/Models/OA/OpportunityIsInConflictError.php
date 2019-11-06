<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class OpportunityIsInConflictError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "OpportunityIsInConflictError";
    }

}
