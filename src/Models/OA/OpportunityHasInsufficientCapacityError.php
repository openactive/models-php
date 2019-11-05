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
    static public function getType()
    {
        return "OpportunityHasInsufficientCapacityError";
    }

}
