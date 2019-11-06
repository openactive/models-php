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
    public static function getType()
    {
        return "schema:OfferCatalog";
    }

}
