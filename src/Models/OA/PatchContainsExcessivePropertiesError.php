<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class PatchContainsExcessivePropertiesError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "PatchContainsExcessivePropertiesError";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
