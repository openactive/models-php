<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class USNonprofitType extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:USNonprofitType";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
