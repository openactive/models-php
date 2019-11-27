<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AcceptAction extends \OpenActive\Models\SchemaOrg\AllocateAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AcceptAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
