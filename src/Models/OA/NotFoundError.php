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
    static public function getType()
    {
        return "NotFoundError";
    }

}
