<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class StadiumOrArena extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:StadiumOrArena";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
