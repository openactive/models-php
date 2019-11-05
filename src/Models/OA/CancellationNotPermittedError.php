<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class CancellationNotPermittedError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "CancellationNotPermittedError";
    }

}
