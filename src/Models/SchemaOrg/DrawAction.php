<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DrawAction extends \OpenActive\Models\SchemaOrg\CreateAction
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:DrawAction";
    }

}
