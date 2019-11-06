<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Continent extends \OpenActive\Models\SchemaOrg\Landform
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Continent";
    }

}
