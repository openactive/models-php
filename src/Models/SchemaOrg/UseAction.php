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
    public static function getType()
    {
        return "schema:UseAction";
    }

}
