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

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
