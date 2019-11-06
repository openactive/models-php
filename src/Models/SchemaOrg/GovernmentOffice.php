<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GovernmentOffice extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:GovernmentOffice";
    }

}
