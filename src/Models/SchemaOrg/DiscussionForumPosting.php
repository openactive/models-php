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
    static public function getType()
    {
        return "schema:DiscussionForumPosting";
    }

}
