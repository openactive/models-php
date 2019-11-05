<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Language extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Language";
    }

}
