<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class IncompleteIntakeFormError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "IncompleteIntakeFormError";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
