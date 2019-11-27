<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ActivateAction extends \OpenActive\Models\SchemaOrg\ControlAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ActivateAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
