<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GeneralContractor extends \OpenActive\Models\SchemaOrg\HomeAndConstructionBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:GeneralContractor";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
