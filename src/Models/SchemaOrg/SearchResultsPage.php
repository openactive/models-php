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
    static public function getType()
    {
        return "schema:SearchResultsPage";
    }

}
