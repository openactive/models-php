<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HairSalon extends \OpenActive\Models\SchemaOrg\HealthAndBeautyBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:HairSalon";
    }

}
