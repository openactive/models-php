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
    static public function getType()
    {
        return "schema:RealEstateAgent";
    }

}
