<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HowToTool extends \OpenActive\Models\SchemaOrg\HowToItem
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:HowToTool";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
