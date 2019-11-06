<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DanceEvent extends \OpenActive\Models\SchemaOrg\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DanceEvent";
    }

}
