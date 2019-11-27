<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class RiverBodyOfWater extends \OpenActive\Models\SchemaOrg\BodyOfWater
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:RiverBodyOfWater";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
