<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Float extends \OpenActive\Models\SchemaOrg\Number
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Float";
    }

}
