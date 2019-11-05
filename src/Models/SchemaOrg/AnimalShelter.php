<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AnimalShelter extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:AnimalShelter";
    }

}
