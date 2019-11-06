<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class UserPageVisits extends \OpenActive\Models\SchemaOrg\UserInteraction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:UserPageVisits";
    }

}
