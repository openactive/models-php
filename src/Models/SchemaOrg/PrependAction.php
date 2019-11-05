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
    static public function getType()
    {
        return "schema:PrependAction";
    }

}
