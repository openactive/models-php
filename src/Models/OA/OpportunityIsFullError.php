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
    static public function getType()
    {
        return "OpportunityIsFullError";
    }

}
