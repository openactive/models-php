<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class UnknownOpportunityDetailsError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "UnknownOpportunityDetailsError";
    }

}
