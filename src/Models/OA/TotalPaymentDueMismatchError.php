<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class TotalPaymentDueMismatchError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "TotalPaymentDueMismatchError";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
