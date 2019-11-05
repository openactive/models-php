<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SubwayStation extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:SubwayStation";
    }

}
