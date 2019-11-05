<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Quantity extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Quantity";
    }

}
