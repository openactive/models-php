<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Campground extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Campground";
    }

}
