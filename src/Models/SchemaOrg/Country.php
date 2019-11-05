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
    static public function getType()
    {
        return "schema:Country";
    }

}
