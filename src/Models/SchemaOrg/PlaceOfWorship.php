<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PlaceOfWorship extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:PlaceOfWorship";
    }

}
