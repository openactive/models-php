<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AutomotiveBusiness extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AutomotiveBusiness";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
