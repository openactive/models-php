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
    static public function getType()
    {
        return "schema:ParcelService";
    }

}
