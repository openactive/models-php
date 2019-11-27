<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MobilePhoneStore extends \OpenActive\Models\SchemaOrg\Store
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MobilePhoneStore";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
