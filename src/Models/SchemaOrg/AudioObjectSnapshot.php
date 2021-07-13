<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AudioObjectSnapshot extends \OpenActive\Models\SchemaOrg\AudioObject
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AudioObjectSnapshot";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
