<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MediaGallery extends \OpenActive\Models\SchemaOrg\CollectionPage
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MediaGallery";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
