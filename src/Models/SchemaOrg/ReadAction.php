<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ReadAction extends \OpenActive\Models\SchemaOrg\ConsumeAction
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:ReadAction";
    }

}
