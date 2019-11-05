<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GardenStore extends \OpenActive\Models\SchemaOrg\Store
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:GardenStore";
    }

}
