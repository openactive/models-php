<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PetStore extends \OpenActive\Models\SchemaOrg\Store
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PetStore";
    }

}
