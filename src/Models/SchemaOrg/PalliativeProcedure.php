<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PalliativeProcedure extends \OpenActive\Models\SchemaOrg\MedicalProcedure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PalliativeProcedure";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
