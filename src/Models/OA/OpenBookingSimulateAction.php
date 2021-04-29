<?php

namespace OpenActive\Models\OA;

/**
 * [NOTICE: This class is part of the Open Booking API Test Interface, and MUST NOT be used in production.] 
 * This type is derived from https://schema.org/Action, which means that any of this type's properties within schema.org may also be used.
 *
 */
class OpenBookingSimulateAction extends \OpenActive\Models\OA\Action
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "test:OpenBookingSimulateAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
