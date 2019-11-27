<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DryCleaningOrLaundry extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DryCleaningOrLaundry";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
