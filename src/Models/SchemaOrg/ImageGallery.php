<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ImageGallery extends \OpenActive\Models\SchemaOrg\MediaGallery
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ImageGallery";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
