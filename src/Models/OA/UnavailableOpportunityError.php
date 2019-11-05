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
    static public function getType()
    {
        return "UnavailableOpportunityError";
    }

}
