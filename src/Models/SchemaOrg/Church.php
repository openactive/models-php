<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Church extends \OpenActive\Models\SchemaOrg\PlaceOfWorship
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Church";
    }

}
