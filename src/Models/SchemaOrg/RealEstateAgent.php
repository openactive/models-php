<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class RealEstateAgent extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:RealEstateAgent";
    }

}
