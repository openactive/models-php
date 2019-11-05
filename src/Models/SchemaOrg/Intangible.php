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
    static public function getType()
    {
        return "schema:Intangible";
    }

}
