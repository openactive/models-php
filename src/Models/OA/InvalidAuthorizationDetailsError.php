<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class InvalidAuthorizationDetailsError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "InvalidAuthorizationDetailsError";
    }

}
