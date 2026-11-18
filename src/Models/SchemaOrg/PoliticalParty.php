<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PoliticalParty extends \OpenActive\Models\SchemaOrg\Organization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PoliticalParty";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
