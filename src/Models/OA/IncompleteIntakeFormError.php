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
    static public function getType()
    {
        return "IncompleteIntakeFormError";
    }

}
