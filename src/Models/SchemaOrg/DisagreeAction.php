<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DisagreeAction extends \OpenActive\Models\SchemaOrg\ReactAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DisagreeAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
