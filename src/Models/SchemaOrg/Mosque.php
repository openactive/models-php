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
    static public function getType()
    {
        return "schema:Mosque";
    }

}
