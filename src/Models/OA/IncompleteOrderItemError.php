<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class IncompleteOrderItemError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "IncompleteOrderItemError";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
