<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EUEnergyEfficiencyEnumeration extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:EUEnergyEfficiencyEnumeration";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
