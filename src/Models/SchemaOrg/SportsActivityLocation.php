<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SportsActivityLocation extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SportsActivityLocation";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
