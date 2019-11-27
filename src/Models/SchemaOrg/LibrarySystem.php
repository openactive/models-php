<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LibrarySystem extends \OpenActive\Models\SchemaOrg\Organization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:LibrarySystem";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
