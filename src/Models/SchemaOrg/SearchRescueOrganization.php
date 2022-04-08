<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SearchRescueOrganization extends \OpenActive\Models\SchemaOrg\Organization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SearchRescueOrganization";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
