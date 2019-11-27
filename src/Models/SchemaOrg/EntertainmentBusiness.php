<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EntertainmentBusiness extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:EntertainmentBusiness";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
