<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PsychologicalTreatment extends \OpenActive\Models\SchemaOrg\TherapeuticProcedure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PsychologicalTreatment";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
