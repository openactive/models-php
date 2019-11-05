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
    static public function getType()
    {
        return "schema:AppendAction";
    }

}
