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
    static public function getType()
    {
        return "InvalidIntakeFormError";
    }

}
