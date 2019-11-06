<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SearchResultsPage extends \OpenActive\Models\SchemaOrg\WebPage
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SearchResultsPage";
    }

}
