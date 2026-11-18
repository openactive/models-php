<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SequentialArt extends \OpenActive\Models\SchemaOrg\Book
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SequentialArt";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
