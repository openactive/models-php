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
    static public function getType()
    {
        return "schema:VideoGallery";
    }

}
