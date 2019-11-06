<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TheaterGroup extends \OpenActive\Models\SchemaOrg\PerformingGroup
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TheaterGroup";
    }

}
