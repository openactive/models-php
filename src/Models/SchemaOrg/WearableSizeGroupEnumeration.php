<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class WearableSizeGroupEnumeration extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:WearableSizeGroupEnumeration";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
