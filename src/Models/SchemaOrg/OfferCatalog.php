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

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
