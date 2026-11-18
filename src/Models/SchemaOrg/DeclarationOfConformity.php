<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DeclarationOfConformity extends \OpenActive\Models\SchemaOrg\Certification
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DeclarationOfConformity";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
