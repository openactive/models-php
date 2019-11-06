<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ExhibitionEvent extends \OpenActive\Models\SchemaOrg\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ExhibitionEvent";
    }

}
