<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class UnavailableOpportunityError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "UnavailableOpportunityError";
    }

}
