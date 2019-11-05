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
    static public function getType()
    {
        return "schema:StructuredValue";
    }

}
