<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Zoo extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Zoo";
    }

}
