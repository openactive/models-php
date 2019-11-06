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

}
