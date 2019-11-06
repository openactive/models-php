<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Table extends \OpenActive\Models\SchemaOrg\WebPageElement
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Table";
    }

}
