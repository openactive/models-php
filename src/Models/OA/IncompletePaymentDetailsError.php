<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class IncompletePaymentDetailsError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "IncompletePaymentDetailsError";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
