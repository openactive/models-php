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

}
