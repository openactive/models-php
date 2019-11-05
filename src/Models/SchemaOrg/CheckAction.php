<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CheckAction extends \OpenActive\Models\SchemaOrg\FindAction
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:CheckAction";
    }

}
