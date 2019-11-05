<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class OpportunityCapacityIsReservedByLeaseError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "OpportunityCapacityIsReservedByLeaseError";
    }

}
