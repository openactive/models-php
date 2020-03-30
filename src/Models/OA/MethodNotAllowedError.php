<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class MethodNotAllowedError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "MethodNotAllowedError";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
