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
    public static function getType()
    {
        return "schema:CheckAction";
    }

}
