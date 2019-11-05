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
    static public function getType()
    {
        return "schema:Table";
    }

}
