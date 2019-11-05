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
    static public function getType()
    {
        return "schema:DanceGroup";
    }

}
