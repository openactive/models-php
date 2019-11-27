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
    public static function getType()
    {
        return "OpportunityIsInConflictError";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
