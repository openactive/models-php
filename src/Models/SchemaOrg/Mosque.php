<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Mosque extends \OpenActive\Models\SchemaOrg\PlaceOfWorship
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Mosque";
    }

}
