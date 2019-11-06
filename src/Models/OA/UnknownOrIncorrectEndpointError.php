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
    public static function getType()
    {
        return "UnknownOrIncorrectEndpointError";
    }

}
