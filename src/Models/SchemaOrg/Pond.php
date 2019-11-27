<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Pond extends \OpenActive\Models\SchemaOrg\BodyOfWater
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Pond";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
