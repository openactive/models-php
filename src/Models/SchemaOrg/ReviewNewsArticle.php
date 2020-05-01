<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ReviewNewsArticle extends \OpenActive\Models\SchemaOrg\NewsArticle
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ReviewNewsArticle";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
