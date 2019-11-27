<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MovingCompany extends \OpenActive\Models\SchemaOrg\HomeAndConstructionBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MovingCompany";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
