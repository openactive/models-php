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
    static public function getType()
    {
        return "schema:MeetingRoom";
    }

}
