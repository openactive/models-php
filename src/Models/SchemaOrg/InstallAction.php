<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class InstallAction extends \OpenActive\Models\SchemaOrg\ConsumeAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:InstallAction";
    }

}
