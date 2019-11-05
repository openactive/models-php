<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AdultEntertainment extends \OpenActive\Models\SchemaOrg\EntertainmentBusiness
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:AdultEntertainment";
    }

}
