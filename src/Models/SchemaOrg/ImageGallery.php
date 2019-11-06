<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ImageGallery extends \OpenActive\Models\SchemaOrg\CollectionPage
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ImageGallery";
    }

}
