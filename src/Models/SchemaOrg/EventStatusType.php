<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EventStatusType extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:EventStatusType";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
