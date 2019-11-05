<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ShoppingCenter extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:ShoppingCenter";
    }

}
