<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CollectionPage extends \OpenActive\Models\SchemaOrg\WebPage
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CollectionPage";
    }

}
