<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BusStop extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:BusStop";
    }

}
