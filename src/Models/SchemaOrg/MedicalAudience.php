<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalAudience extends \OpenActive\Models\SchemaOrg\PeopleAudience
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalAudience";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
