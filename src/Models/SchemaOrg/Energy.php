<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Energy extends \OpenActive\Models\SchemaOrg\Quantity
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Energy";
    }

}
