<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class OceanBodyOfWater extends \OpenActive\Models\SchemaOrg\BodyOfWater
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:OceanBodyOfWater";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
