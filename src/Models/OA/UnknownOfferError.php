<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class UnknownOfferError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "UnknownOfferError";
    }

}
