<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class FireStation extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:FireStation";
    }

}
