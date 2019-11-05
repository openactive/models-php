<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Distance extends \OpenActive\Models\SchemaOrg\Quantity
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Distance";
    }

}
