<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class InvalidIntakeFormError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "InvalidIntakeFormError";
    }

}
