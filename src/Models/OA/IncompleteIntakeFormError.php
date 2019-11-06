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

}
