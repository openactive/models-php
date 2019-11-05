<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class RadioSeason extends \OpenActive\Models\SchemaOrg\CreativeWorkSeason
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:RadioSeason";
    }

}
