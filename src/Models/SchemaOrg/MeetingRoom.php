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

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
