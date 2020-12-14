<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DiagnosticProcedure extends \OpenActive\Models\SchemaOrg\MedicalProcedure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DiagnosticProcedure";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
