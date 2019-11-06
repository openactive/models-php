<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Beach extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Beach";
    }

}
