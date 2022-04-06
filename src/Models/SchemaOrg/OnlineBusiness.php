<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class OnlineBusiness extends \OpenActive\Models\SchemaOrg\Organization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:OnlineBusiness";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
