<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class UserCheckins extends \OpenActive\Models\SchemaOrg\UserInteraction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:UserCheckins";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
