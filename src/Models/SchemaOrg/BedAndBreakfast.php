<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BedAndBreakfast extends \OpenActive\Models\SchemaOrg\LodgingBusiness
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:BedAndBreakfast";
    }

}
