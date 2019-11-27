<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AdultEntertainment extends \OpenActive\Models\SchemaOrg\EntertainmentBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AdultEntertainment";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
