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
    static public function getType()
    {
        return "schema:BuddhistTemple";
    }

}
