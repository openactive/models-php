<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class InvalidAPITokenError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "InvalidAPITokenError";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
