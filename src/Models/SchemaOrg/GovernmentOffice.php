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
    static public function getType()
    {
        return "schema:GovernmentOffice";
    }

}
