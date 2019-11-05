<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EventVenue extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:EventVenue";
    }

}
