<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class NailSalon extends \OpenActive\Models\SchemaOrg\HealthAndBeautyBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:NailSalon";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
