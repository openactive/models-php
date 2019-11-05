<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Park extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Park";
    }

}
