<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EatAction extends \OpenActive\Models\SchemaOrg\ConsumeAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:EatAction";
    }

}
