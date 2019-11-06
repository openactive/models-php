<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class UserPlays extends \OpenActive\Models\SchemaOrg\UserInteraction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:UserPlays";
    }

}
