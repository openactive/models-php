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
    public static function getType()
    {
        return "schema:Language";
    }

}
