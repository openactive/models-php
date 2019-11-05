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
    static public function getType()
    {
        return "schema:CheckInAction";
    }

}
