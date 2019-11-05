<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Volcano extends \OpenActive\Models\SchemaOrg\Landform
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Volcano";
    }

}
