<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class OrderAlreadyExistsError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "OrderAlreadyExistsError";
    }

}
