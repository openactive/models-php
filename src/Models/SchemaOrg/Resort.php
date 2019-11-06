<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Resort extends \OpenActive\Models\SchemaOrg\LodgingBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Resort";
    }

}
