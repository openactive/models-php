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

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
