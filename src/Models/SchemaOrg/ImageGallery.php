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
    static public function getType()
    {
        return "schema:ImageGallery";
    }

}
