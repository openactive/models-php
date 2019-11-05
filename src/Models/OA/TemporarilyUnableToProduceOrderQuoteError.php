<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class TemporarilyUnableToProduceOrderQuoteError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "TemporarilyUnableToProduceOrderQuoteError";
    }

}
