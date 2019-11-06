<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class VideoGallery extends \OpenActive\Models\SchemaOrg\CollectionPage
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:VideoGallery";
    }

}
