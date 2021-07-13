<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class VideoObjectSnapshot extends \OpenActive\Models\SchemaOrg\VideoObject
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:VideoObjectSnapshot";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
