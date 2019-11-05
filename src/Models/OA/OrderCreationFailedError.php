<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class OrderCreationFailedError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "OrderCreationFailedError";
    }

}
