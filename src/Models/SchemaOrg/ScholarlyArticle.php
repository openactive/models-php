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
    static public function getType()
    {
        return "schema:ScholarlyArticle";
    }

}
