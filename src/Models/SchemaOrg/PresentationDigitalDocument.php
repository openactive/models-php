<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PresentationDigitalDocument extends \OpenActive\Models\SchemaOrg\DigitalDocument
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PresentationDigitalDocument";
    }

}
