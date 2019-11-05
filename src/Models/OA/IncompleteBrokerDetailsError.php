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
    static public function getType()
    {
        return "IncompleteBrokerDetailsError";
    }

}
