<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SkiResort extends \OpenActive\Models\SchemaOrg\Resort
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SkiResort";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
