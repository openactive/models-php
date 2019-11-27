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
    public static function getType()
    {
        return "OpportunityCapacityIsReservedByLeaseError";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
