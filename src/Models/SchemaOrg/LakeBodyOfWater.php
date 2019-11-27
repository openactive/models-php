<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LakeBodyOfWater extends \OpenActive\Models\SchemaOrg\BodyOfWater
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:LakeBodyOfWater";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
