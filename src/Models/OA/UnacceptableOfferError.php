<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class UnacceptableOfferError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "UnacceptableOfferError";
    }

}
