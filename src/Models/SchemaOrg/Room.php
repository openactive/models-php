<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Room extends \OpenActive\Models\SchemaOrg\Accommodation
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Room";
    }

}
