<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ApprovedIndication extends \OpenActive\Models\SchemaOrg\MedicalIndication
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ApprovedIndication";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
