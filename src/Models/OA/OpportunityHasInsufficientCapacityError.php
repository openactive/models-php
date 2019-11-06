<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class OpportunityHasInsufficientCapacityError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "OpportunityHasInsufficientCapacityError";
    }

}
