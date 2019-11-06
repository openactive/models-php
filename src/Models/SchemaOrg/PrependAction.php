<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PrependAction extends \OpenActive\Models\SchemaOrg\InsertAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PrependAction";
    }

}
