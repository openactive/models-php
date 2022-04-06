<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class OnlineStore extends \OpenActive\Models\SchemaOrg\OnlineBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:OnlineStore";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
