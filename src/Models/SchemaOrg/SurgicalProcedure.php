<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SurgicalProcedure extends \OpenActive\Models\SchemaOrg\MedicalProcedure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SurgicalProcedure";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
