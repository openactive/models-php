<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PreventionIndication extends \OpenActive\Models\SchemaOrg\MedicalIndication
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PreventionIndication";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
