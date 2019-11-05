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
    static public function getType()
    {
        return "OpportunityIsInConflictError";
    }

}
