<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SteeringPositionValue extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SteeringPositionValue";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
