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
    static public function getType()
    {
        return "schema:UserPageVisits";
    }

}
