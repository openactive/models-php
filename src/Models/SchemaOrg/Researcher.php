<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Researcher extends \OpenActive\Models\SchemaOrg\Audience
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Researcher";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
