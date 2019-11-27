<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class NightClub extends \OpenActive\Models\SchemaOrg\EntertainmentBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:NightClub";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
