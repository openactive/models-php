<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CovidTestingFacility extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CovidTestingFacility";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
