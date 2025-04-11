<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PhysiciansOffice extends \OpenActive\Models\SchemaOrg\Physician
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PhysiciansOffice";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
