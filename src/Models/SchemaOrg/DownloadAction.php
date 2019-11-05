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
    static public function getType()
    {
        return "schema:DownloadAction";
    }

}
