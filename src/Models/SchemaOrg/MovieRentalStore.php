<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MovieRentalStore extends \OpenActive\Models\SchemaOrg\Store
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MovieRentalStore";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
