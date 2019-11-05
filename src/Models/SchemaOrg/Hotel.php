<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Hotel extends \OpenActive\Models\SchemaOrg\LodgingBusiness
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Hotel";
    }

}
