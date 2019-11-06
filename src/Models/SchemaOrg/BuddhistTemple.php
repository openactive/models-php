<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BuddhistTemple extends \OpenActive\Models\SchemaOrg\PlaceOfWorship
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BuddhistTemple";
    }

}
