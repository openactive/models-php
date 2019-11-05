<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class UserCheckins extends \OpenActive\Models\SchemaOrg\UserInteraction
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:UserCheckins";
    }

}
