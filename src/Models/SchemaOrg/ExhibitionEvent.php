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
    static public function getType()
    {
        return "schema:ExhibitionEvent";
    }

}
