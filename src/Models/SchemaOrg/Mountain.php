<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Mountain extends \OpenActive\Models\SchemaOrg\Landform
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Mountain";
    }

}
