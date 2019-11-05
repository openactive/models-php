<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class DynamicPayment extends \OpenActive\Models\OA\Payment
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "DynamicPayment";
    }

}
