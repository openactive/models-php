<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AutoRental extends \OpenActive\Models\SchemaOrg\AutomotiveBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AutoRental";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
