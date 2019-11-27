<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ComputerLanguage extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ComputerLanguage";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
