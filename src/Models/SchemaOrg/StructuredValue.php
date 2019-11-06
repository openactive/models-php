<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class StructuredValue extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:StructuredValue";
    }

}
