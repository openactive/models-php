<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DanceGroup extends \OpenActive\Models\SchemaOrg\PerformingGroup
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DanceGroup";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
