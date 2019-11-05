<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Duration extends \OpenActive\Models\SchemaOrg\Quantity
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Duration";
    }

}
