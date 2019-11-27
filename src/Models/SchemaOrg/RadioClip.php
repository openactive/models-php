<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class RadioClip extends \OpenActive\Models\SchemaOrg\Clip
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:RadioClip";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
