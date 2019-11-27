<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LockerDelivery extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:LockerDelivery";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
