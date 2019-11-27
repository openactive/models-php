<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class IncompleteAttendeeDetailsError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "IncompleteAttendeeDetailsError";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
