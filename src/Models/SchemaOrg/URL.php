<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class URL extends \OpenActive\Models\SchemaOrg\Text
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:URL";
    }

}
