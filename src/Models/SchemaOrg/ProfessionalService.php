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
    static public function getType()
    {
        return "schema:ProfessionalService";
    }

}
