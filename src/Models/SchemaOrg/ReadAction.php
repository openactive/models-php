<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ReadAction extends \OpenActive\Models\SchemaOrg\ConsumeAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ReadAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
