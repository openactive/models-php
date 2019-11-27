<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HomeAndConstructionBusiness extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:HomeAndConstructionBusiness";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
