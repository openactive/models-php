<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SelfStorage extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:SelfStorage";
    }

}
