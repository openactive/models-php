<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AMRadioChannel extends \OpenActive\Models\SchemaOrg\RadioChannel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AMRadioChannel";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
