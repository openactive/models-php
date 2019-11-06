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
    public static function getType()
    {
        return "schema:PlaceOfWorship";
    }

}
