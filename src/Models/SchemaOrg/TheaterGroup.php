<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TheaterGroup extends \OpenActive\Models\SchemaOrg\PerformingGroup
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TheaterGroup";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
