<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CampingPitch extends \OpenActive\Models\SchemaOrg\Accommodation
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CampingPitch";
    }

}
