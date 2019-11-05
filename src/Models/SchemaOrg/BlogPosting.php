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
    static public function getType()
    {
        return "schema:BlogPosting";
    }

}
