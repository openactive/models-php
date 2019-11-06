<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MeetingRoom extends \OpenActive\Models\SchemaOrg\Room
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MeetingRoom";
    }

}
