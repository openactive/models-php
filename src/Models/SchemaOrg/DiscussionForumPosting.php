<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DiscussionForumPosting extends \OpenActive\Models\SchemaOrg\SocialMediaPosting
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DiscussionForumPosting";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
