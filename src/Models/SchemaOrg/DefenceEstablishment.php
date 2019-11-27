<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DefenceEstablishment extends \OpenActive\Models\SchemaOrg\GovernmentBuilding
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DefenceEstablishment";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
