<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CheckInAction extends \OpenActive\Models\SchemaOrg\CommunicateAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CheckInAction";
    }

}
