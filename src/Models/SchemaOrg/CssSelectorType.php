<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CssSelectorType extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CssSelectorType";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
