<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class TemporarilyUnableToUpdateOrderError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "TemporarilyUnableToUpdateOrderError";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
