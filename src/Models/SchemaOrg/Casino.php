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
    static public function getType()
    {
        return "schema:Casino";
    }

}
