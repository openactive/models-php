<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ReserveAction extends \OpenActive\Models\SchemaOrg\PlanAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ReserveAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
