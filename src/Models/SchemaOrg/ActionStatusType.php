<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ActionStatusType extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ActionStatusType";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
