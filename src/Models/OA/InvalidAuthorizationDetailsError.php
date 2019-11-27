<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class InvalidAuthorizationDetailsError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "InvalidAuthorizationDetailsError";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
