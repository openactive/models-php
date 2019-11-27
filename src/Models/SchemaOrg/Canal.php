<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Canal extends \OpenActive\Models\SchemaOrg\BodyOfWater
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Canal";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
