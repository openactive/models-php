<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CorrectionComment extends \OpenActive\Models\SchemaOrg\Comment
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CorrectionComment";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
