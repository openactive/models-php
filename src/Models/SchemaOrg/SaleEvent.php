<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SaleEvent extends \OpenActive\Models\SchemaOrg\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SaleEvent";
    }

}
