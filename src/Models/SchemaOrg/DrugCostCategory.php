<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DrugCostCategory extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DrugCostCategory";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
