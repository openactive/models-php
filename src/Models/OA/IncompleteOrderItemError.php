<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class IncompleteOrderItemError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "IncompleteOrderItemError";
    }

}
