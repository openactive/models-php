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
    public static function getType()
    {
        return "schema:HVACBusiness";
    }

}
