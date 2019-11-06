<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class City extends \OpenActive\Models\SchemaOrg\AdministrativeArea
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:City";
    }

}
