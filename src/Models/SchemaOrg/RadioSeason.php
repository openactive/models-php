<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class RadioSeason extends \OpenActive\Models\SchemaOrg\CreativeWorkSeason
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:RadioSeason";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
