<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ReactAction extends \OpenActive\Models\SchemaOrg\AssessAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ReactAction";
    }

}
