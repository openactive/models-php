<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class UnknownOrIncorrectEndpointError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "UnknownOrIncorrectEndpointError";
    }

}
