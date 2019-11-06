<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TextDigitalDocument extends \OpenActive\Models\SchemaOrg\DigitalDocument
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TextDigitalDocument";
    }

}
