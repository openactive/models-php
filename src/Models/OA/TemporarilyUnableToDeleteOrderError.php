<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class TemporarilyUnableToDeleteOrderError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "TemporarilyUnableToDeleteOrderError";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
