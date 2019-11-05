<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HVACBusiness extends \OpenActive\Models\SchemaOrg\HomeAndConstructionBusiness
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:HVACBusiness";
    }

}
