<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ITNonprofitType extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ITNonprofitType";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
