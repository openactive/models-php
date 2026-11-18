<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AuthenticateAction extends \OpenActive\Models\SchemaOrg\ControlAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AuthenticateAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
