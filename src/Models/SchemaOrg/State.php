<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class State extends \OpenActive\Models\SchemaOrg\AdministrativeArea
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:State";
    }

}
