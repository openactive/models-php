<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Hotel extends \OpenActive\Models\SchemaOrg\LodgingBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Hotel";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
