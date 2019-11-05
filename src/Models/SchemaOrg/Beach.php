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
    static public function getType()
    {
        return "schema:Beach";
    }

}
