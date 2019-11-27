<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class RadioChannel extends \OpenActive\Models\SchemaOrg\BroadcastChannel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:RadioChannel";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
