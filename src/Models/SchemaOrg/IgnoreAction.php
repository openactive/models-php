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
    static public function getType()
    {
        return "schema:IgnoreAction";
    }

}
