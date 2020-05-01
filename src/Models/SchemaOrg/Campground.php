<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Campground extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Campground";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
