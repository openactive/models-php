<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MotorcycleRepair extends \OpenActive\Models\SchemaOrg\AutomotiveBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MotorcycleRepair";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
