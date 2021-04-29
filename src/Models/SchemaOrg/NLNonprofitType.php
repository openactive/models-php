<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class NLNonprofitType extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:NLNonprofitType";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
