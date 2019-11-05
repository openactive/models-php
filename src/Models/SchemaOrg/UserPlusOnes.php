<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class UserPlusOnes extends \OpenActive\Models\SchemaOrg\UserInteraction
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:UserPlusOnes";
    }

}
