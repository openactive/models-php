<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class IncompleteBrokerDetailsError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "IncompleteBrokerDetailsError";
    }

}
