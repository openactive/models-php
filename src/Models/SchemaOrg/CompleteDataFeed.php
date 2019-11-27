<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CompleteDataFeed extends \OpenActive\Models\SchemaOrg\DataFeed
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CompleteDataFeed";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
