<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class NotFoundError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "NotFoundError";
    }

}
