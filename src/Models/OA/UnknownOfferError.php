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
    static public function getType()
    {
        return "UnknownOfferError";
    }

}
