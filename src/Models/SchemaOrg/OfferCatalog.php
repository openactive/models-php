<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class OfferCatalog extends \OpenActive\Models\SchemaOrg\ItemList
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:OfferCatalog";
    }

}
