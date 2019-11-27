<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DriveWheelConfigurationValue extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DriveWheelConfigurationValue";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
