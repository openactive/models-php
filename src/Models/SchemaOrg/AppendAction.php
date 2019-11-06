<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AppendAction extends \OpenActive\Models\SchemaOrg\InsertAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AppendAction";
    }

}
