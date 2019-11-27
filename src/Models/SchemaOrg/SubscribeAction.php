<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SubscribeAction extends \OpenActive\Models\SchemaOrg\InteractAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SubscribeAction";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
