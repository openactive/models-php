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
    static public function getType()
    {
        return "schema:Embassy";
    }

}
