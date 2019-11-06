<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SpreadsheetDigitalDocument extends \OpenActive\Models\SchemaOrg\DigitalDocument
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SpreadsheetDigitalDocument";
    }

}
