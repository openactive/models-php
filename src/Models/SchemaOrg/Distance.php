<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Distance extends \OpenActive\Models\SchemaOrg\Quantity
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Distance";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
