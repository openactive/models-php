<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class PatchNotAllowedOnPropertyError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "PatchNotAllowedOnPropertyError";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
