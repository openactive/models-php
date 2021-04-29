<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BloodTest extends \OpenActive\Models\SchemaOrg\MedicalTest
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BloodTest";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
