<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Embassy extends \OpenActive\Models\SchemaOrg\GovernmentBuilding
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Embassy";
    }

}
