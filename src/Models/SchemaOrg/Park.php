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
    public static function getType()
    {
        return "schema:Park";
    }

}
