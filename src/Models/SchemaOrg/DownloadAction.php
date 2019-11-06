<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DownloadAction extends \OpenActive\Models\SchemaOrg\TransferAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DownloadAction";
    }

}
