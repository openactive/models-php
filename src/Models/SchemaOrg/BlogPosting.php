<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BlogPosting extends \OpenActive\Models\SchemaOrg\SocialMediaPosting
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BlogPosting";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
