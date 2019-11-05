<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Integer extends \OpenActive\Models\SchemaOrg\Number
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Integer";
    }

}
