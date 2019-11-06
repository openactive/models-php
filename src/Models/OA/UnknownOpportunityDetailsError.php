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
    public static function getType()
    {
        return "UnknownOpportunityDetailsError";
    }

}
