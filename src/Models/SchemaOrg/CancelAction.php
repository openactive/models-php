<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CancelAction extends \OpenActive\Models\SchemaOrg\PlanAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CancelAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
