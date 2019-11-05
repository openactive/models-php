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
    static public function getType()
    {
        return "schema:Enumeration";
    }

}
