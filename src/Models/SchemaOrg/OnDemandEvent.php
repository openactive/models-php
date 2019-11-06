<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class OnDemandEvent extends \OpenActive\Models\SchemaOrg\PublicationEvent
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:OnDemandEvent";
    }

}
