<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CatholicChurch extends \OpenActive\Models\SchemaOrg\Church
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CatholicChurch";
    }

}
