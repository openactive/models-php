<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MotorizedBicycle extends \OpenActive\Models\SchemaOrg\Vehicle
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MotorizedBicycle";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
