<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MonetaryGrant extends \OpenActive\Models\SchemaOrg\Grant
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MonetaryGrant";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
