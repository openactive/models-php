<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DanceGroup extends \OpenActive\Models\SchemaOrg\PerformingGroup
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DanceGroup";
    }

}
