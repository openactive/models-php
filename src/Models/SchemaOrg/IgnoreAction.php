<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class IgnoreAction extends \OpenActive\Models\SchemaOrg\AssessAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:IgnoreAction";
    }

}
