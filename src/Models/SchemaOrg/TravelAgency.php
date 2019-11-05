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
    static public function getType()
    {
        return "schema:TravelAgency";
    }

}
