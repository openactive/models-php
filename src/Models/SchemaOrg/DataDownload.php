<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DataDownload extends \OpenActive\Models\SchemaOrg\MediaObject
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DataDownload";
    }

}
