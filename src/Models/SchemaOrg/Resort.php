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
    static public function getType()
    {
        return "schema:Resort";
    }

}
