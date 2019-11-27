<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GeospatialGeometry extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:GeospatialGeometry";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
