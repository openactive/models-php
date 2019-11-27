<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GovernmentPermit extends \OpenActive\Models\SchemaOrg\Permit
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:GovernmentPermit";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
