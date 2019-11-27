<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class CancellationNotPermittedError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "CancellationNotPermittedError";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
