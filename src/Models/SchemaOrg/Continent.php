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
    static public function getType()
    {
        return "schema:Continent";
    }

}
