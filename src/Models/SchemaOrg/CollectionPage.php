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
    static public function getType()
    {
        return "schema:CollectionPage";
    }

}
