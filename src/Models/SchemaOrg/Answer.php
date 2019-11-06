<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Answer extends \OpenActive\Models\SchemaOrg\Comment
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Answer";
    }

}
