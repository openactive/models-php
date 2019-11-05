<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Synagogue extends \OpenActive\Models\SchemaOrg\PlaceOfWorship
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Synagogue";
    }

}
