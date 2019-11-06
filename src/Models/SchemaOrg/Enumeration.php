<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Enumeration extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Enumeration";
    }

}
