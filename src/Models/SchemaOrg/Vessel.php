<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Vessel extends \OpenActive\Models\SchemaOrg\AnatomicalStructure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Vessel";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
