<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class UserInteraction extends \OpenActive\Models\SchemaOrg\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:UserInteraction";
    }

}
