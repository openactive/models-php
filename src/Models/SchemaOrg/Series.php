<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Series extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Series";
    }

}
