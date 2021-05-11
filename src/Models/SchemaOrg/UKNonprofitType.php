<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class UKNonprofitType extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:UKNonprofitType";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
