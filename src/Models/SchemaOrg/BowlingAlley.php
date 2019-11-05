<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * This type is derived from [SportsActivityLocation](https://schema.org/SportsActivityLocation), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class BowlingAlley extends \OpenActive\Models\SchemaOrg\SportsActivityLocation
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:BowlingAlley";
    }

}
