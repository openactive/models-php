<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class RadioBroadcastService extends \OpenActive\Models\SchemaOrg\BroadcastService
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:RadioBroadcastService";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
