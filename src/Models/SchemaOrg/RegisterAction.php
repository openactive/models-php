<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class RegisterAction extends \OpenActive\Models\SchemaOrg\InteractAction
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:RegisterAction";
    }

}
