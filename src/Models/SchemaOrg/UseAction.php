<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class UseAction extends \OpenActive\Models\SchemaOrg\ConsumeAction
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:UseAction";
    }

}
