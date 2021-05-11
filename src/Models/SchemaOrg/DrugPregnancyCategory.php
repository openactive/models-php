<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DrugPregnancyCategory extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DrugPregnancyCategory";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
