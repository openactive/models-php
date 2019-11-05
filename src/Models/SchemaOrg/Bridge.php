<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Bridge extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Bridge";
    }

}
