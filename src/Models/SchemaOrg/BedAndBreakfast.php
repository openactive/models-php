<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BedAndBreakfast extends \OpenActive\Models\SchemaOrg\LodgingBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BedAndBreakfast";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
