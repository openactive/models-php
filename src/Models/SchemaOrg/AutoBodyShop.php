<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AutoBodyShop extends \OpenActive\Models\SchemaOrg\AutomotiveBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AutoBodyShop";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
