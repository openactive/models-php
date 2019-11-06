<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class State extends \OpenActive\Models\SchemaOrg\AdministrativeArea
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:State";
    }

}
