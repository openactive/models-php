<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Store extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Store";
    }

}
