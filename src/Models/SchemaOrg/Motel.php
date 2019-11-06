<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Motel extends \OpenActive\Models\SchemaOrg\LodgingBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Motel";
    }

}
