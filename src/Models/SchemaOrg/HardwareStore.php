<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HardwareStore extends \OpenActive\Models\SchemaOrg\Store
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:HardwareStore";
    }

}
