<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CatholicChurch extends \OpenActive\Models\SchemaOrg\Church
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CatholicChurch";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
