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
    public static function getType()
    {
        return "schema:Hostel";
    }

}
