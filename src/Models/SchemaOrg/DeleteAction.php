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
    public static function getType()
    {
        return "schema:DeleteAction";
    }

}
