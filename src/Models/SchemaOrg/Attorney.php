<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Attorney extends \OpenActive\Models\SchemaOrg\LegalService
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Attorney";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
