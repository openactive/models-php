<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Duration extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Duration";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
