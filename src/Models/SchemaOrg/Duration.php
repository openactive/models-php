<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Duration extends \OpenActive\Models\SchemaOrg\Quantity
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Duration";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
