<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TravelAgency extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TravelAgency";
    }

}
