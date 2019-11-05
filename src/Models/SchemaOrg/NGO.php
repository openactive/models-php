<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * This type is derived from [Organization](https://schema.org/Organization), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class NGO extends \OpenActive\Models\SchemaOrg\Organization
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:NGO";
    }

}
