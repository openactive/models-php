<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AutoRepair extends \OpenActive\Models\SchemaOrg\AutomotiveBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AutoRepair";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
