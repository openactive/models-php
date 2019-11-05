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
    static public function getType()
    {
        return "schema:HairSalon";
    }

}
