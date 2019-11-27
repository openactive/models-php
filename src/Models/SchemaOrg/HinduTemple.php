<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HinduTemple extends \OpenActive\Models\SchemaOrg\PlaceOfWorship
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:HinduTemple";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
