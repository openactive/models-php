<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class TemporarilyUnableToProduceOrderQuoteError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "TemporarilyUnableToProduceOrderQuoteError";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
