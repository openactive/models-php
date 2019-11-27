<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class UserPlusOnes extends \OpenActive\Models\SchemaOrg\UserInteraction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:UserPlusOnes";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
