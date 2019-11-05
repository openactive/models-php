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
    static public function getType()
    {
        return "schema:OnDemandEvent";
    }

}
