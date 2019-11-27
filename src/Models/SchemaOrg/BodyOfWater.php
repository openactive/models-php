<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BodyOfWater extends \OpenActive\Models\SchemaOrg\Landform
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BodyOfWater";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
