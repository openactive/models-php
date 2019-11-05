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
    static public function getType()
    {
        return "schema:ReactAction";
    }

}
