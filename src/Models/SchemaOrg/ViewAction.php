<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ViewAction extends \OpenActive\Models\SchemaOrg\ConsumeAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ViewAction";
    }

}
