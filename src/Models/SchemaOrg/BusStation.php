<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BusStation extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:BusStation";
    }

}
