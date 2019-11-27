<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Energy extends \OpenActive\Models\SchemaOrg\Quantity
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Energy";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
