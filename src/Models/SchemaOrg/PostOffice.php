<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PostOffice extends \OpenActive\Models\SchemaOrg\GovernmentOffice
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PostOffice";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
