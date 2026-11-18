<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EnvironmentalProductDeclaration extends \OpenActive\Models\SchemaOrg\Certification
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:EnvironmentalProductDeclaration";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
