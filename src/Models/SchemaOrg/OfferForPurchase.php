<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class OfferForPurchase extends \OpenActive\Models\SchemaOrg\Offer
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:OfferForPurchase";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
