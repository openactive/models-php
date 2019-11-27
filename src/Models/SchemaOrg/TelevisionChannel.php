<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TelevisionChannel extends \OpenActive\Models\SchemaOrg\BroadcastChannel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TelevisionChannel";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
