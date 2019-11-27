<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class RealEstateAgent extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:RealEstateAgent";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
