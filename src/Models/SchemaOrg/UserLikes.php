<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class UserLikes extends \OpenActive\Models\SchemaOrg\UserInteraction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:UserLikes";
    }

}
