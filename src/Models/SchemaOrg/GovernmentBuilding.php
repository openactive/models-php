<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GovernmentBuilding extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:GovernmentBuilding";
    }

}
