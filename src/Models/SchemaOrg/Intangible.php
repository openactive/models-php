<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Intangible extends \OpenActive\Models\SchemaOrg\Thing
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Intangible";
    }

}
