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
    static public function getType()
    {
        return "schema:PetStore";
    }

}
