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
    public static function getType()
    {
        return "schema:Synagogue";
    }

}
