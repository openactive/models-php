<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MovieRentalStore extends \OpenActive\Models\SchemaOrg\Store
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:MovieRentalStore";
    }

}
