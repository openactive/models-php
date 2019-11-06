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
    public static function getType()
    {
        return "schema:SubwayStation";
    }

}
