<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Volcano extends \OpenActive\Models\SchemaOrg\Landform
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Volcano";
    }

}
