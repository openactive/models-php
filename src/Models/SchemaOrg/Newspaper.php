<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Newspaper extends \OpenActive\Models\SchemaOrg\Periodical
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Newspaper";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
