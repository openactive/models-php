<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Cemetery extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Cemetery";
    }

}
