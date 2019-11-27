<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DislikeAction extends \OpenActive\Models\SchemaOrg\ReactAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DislikeAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
