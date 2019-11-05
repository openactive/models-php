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
    static public function getType()
    {
        return "schema:EatAction";
    }

}
