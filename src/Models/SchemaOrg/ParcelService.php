<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ParcelService extends \OpenActive\Models\SchemaOrg\DeliveryMethod
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ParcelService";
    }

}
