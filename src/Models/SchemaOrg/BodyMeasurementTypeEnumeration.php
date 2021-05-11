<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BodyMeasurementTypeEnumeration extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BodyMeasurementTypeEnumeration";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
