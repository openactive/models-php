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
    static public function getType()
    {
        return "schema:ViewAction";
    }

}
