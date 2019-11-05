<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AmusementPark extends \OpenActive\Models\SchemaOrg\EntertainmentBusiness
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:AmusementPark";
    }

}
