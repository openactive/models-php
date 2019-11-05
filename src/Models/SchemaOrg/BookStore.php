<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BookStore extends \OpenActive\Models\SchemaOrg\Store
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:BookStore";
    }

}
