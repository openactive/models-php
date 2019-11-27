<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ResumeAction extends \OpenActive\Models\SchemaOrg\ControlAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ResumeAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
