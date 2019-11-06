<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LockerDelivery extends \OpenActive\Models\SchemaOrg\DeliveryMethod
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:LockerDelivery";
    }

}
