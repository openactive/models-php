<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class UserTweets extends \OpenActive\Models\SchemaOrg\UserInteraction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:UserTweets";
    }

}
