<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AutoDealer extends \OpenActive\Models\SchemaOrg\AutomotiveBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AutoDealer";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
