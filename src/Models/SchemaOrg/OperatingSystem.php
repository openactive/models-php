<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class OperatingSystem extends \OpenActive\Models\SchemaOrg\SoftwareApplication
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:OperatingSystem";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
