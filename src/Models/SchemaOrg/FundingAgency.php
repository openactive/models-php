<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class FundingAgency extends \OpenActive\Models\SchemaOrg\Project
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:FundingAgency";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
