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
    static public function getType()
    {
        return "UnacceptableOfferError";
    }

}
