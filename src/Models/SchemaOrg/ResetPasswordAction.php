<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ResetPasswordAction extends \OpenActive\Models\SchemaOrg\ControlAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ResetPasswordAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
