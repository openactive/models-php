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
    static public function getType()
    {
        return "schema:SaleEvent";
    }

}
