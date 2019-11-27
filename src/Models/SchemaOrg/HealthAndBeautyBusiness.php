<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HealthAndBeautyBusiness extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:HealthAndBeautyBusiness";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
