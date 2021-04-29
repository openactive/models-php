<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class WearableSizeSystemEnumeration extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:WearableSizeSystemEnumeration";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
