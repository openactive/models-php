<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PhysicalExam extends \OpenActive\Models\SchemaOrg\MedicalProcedure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PhysicalExam";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
