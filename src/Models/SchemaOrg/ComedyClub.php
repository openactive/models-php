<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ComedyClub extends \OpenActive\Models\SchemaOrg\EntertainmentBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ComedyClub";
    }

}
