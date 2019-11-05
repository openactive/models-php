<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Distillery extends \OpenActive\Models\SchemaOrg\FoodEstablishment
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Distillery";
    }

}
