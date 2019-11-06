<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ProfessionalService extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ProfessionalService";
    }

}
