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
    static public function getType()
    {
        return "schema:SpreadsheetDigitalDocument";
    }

}
