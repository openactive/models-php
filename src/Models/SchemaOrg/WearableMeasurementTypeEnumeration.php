<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class WearableMeasurementTypeEnumeration extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:WearableMeasurementTypeEnumeration";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
