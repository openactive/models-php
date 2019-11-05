<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Hostel extends \OpenActive\Models\SchemaOrg\LodgingBusiness
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Hostel";
    }

}
