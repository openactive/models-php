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
    static public function getType()
    {
        return "schema:UserLikes";
    }

}
