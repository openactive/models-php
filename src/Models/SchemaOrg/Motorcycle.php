<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Motorcycle extends \OpenActive\Models\SchemaOrg\Vehicle
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Motorcycle";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
