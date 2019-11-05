<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DeleteAction extends \OpenActive\Models\SchemaOrg\UpdateAction
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:DeleteAction";
    }

}
