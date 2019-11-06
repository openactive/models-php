<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Courthouse extends \OpenActive\Models\SchemaOrg\GovernmentBuilding
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Courthouse";
    }

}
