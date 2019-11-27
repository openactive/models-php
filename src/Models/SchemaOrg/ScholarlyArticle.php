<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ScholarlyArticle extends \OpenActive\Models\SchemaOrg\Article
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ScholarlyArticle";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
