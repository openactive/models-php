<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EndorsementRating extends \OpenActive\Models\SchemaOrg\Rating
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:EndorsementRating";
    }

}
