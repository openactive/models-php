<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class OfficeEquipmentStore extends \OpenActive\Models\SchemaOrg\Store
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:OfficeEquipmentStore";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
