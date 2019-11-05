<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HinduTemple extends \OpenActive\Models\SchemaOrg\PlaceOfWorship
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:HinduTemple";
    }

}
