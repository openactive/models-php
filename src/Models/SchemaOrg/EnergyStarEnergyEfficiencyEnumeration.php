<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EnergyStarEnergyEfficiencyEnumeration extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:EnergyStarEnergyEfficiencyEnumeration";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
