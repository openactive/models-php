<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Casino extends \OpenActive\Models\SchemaOrg\EntertainmentBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Casino";
    }

}
