<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ShareAction extends \OpenActive\Models\SchemaOrg\CommunicateAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ShareAction";
    }

}
