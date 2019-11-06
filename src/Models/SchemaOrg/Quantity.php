<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Quantity extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Quantity";
    }

}
