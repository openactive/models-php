<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ImageObjectSnapshot extends \OpenActive\Models\SchemaOrg\ImageObject
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ImageObjectSnapshot";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
