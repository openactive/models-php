<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AdvertiserContentArticle extends \OpenActive\Models\SchemaOrg\Article
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AdvertiserContentArticle";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
