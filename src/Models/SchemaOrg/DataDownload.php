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
    static public function getType()
    {
        return "schema:DataDownload";
    }

}
