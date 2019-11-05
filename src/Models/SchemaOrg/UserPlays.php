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
    static public function getType()
    {
        return "schema:UserPlays";
    }

}
