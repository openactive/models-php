<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CityHall extends \OpenActive\Models\SchemaOrg\GovernmentBuilding
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:CityHall";
    }

}
