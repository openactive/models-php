<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Mountain extends \OpenActive\Models\SchemaOrg\Landform
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Mountain";
    }

}
