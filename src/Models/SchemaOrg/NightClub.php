<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class NightClub extends \OpenActive\Models\SchemaOrg\EntertainmentBusiness
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:NightClub";
    }

}
