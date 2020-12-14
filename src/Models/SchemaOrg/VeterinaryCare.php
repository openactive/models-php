<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class VeterinaryCare extends \OpenActive\Models\SchemaOrg\MedicalOrganization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:VeterinaryCare";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
