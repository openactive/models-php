<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Museum extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Museum";
    }

}
