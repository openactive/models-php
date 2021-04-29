<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BoatTerminal extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BoatTerminal";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
