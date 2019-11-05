<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LegislativeBuilding extends \OpenActive\Models\SchemaOrg\GovernmentBuilding
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:LegislativeBuilding";
    }

}
