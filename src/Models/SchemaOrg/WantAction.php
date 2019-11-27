<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class WantAction extends \OpenActive\Models\SchemaOrg\ReactAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:WantAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
