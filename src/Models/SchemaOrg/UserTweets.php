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
    static public function getType()
    {
        return "schema:UserTweets";
    }

}
