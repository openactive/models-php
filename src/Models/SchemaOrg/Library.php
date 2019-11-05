<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Library extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Library";
    }

}
