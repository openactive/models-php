<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AddAction extends \OpenActive\Models\SchemaOrg\UpdateAction
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:AddAction";
    }

}
