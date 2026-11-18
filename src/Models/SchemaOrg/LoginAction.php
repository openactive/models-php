<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LoginAction extends \OpenActive\Models\SchemaOrg\ControlAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:LoginAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
