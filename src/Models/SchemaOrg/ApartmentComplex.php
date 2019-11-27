<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ApartmentComplex extends \OpenActive\Models\SchemaOrg\Residence
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ApartmentComplex";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
