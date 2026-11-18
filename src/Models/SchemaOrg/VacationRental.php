<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class VacationRental extends \OpenActive\Models\SchemaOrg\LodgingBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:VacationRental";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
