<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HowToStep extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:HowToStep";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
