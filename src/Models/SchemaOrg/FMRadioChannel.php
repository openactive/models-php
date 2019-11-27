<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class FMRadioChannel extends \OpenActive\Models\SchemaOrg\RadioChannel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:FMRadioChannel";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
