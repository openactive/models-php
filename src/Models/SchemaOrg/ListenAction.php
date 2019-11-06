<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ListenAction extends \OpenActive\Models\SchemaOrg\ConsumeAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ListenAction";
    }

}
