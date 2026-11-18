<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class RuntimePlatform extends \OpenActive\Models\SchemaOrg\SoftwareApplication
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:RuntimePlatform";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
