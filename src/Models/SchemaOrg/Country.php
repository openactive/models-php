<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Country extends \OpenActive\Models\SchemaOrg\AdministrativeArea
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Country";
    }

}
