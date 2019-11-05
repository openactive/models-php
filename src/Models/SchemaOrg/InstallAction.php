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
    static public function getType()
    {
        return "schema:InstallAction";
    }

}
