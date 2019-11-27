<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Reservoir extends \OpenActive\Models\SchemaOrg\BodyOfWater
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Reservoir";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
