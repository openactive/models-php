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
    static public function getType()
    {
        return "schema:Courthouse";
    }

}
