<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TattooParlor extends \OpenActive\Models\SchemaOrg\HealthAndBeautyBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TattooParlor";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
