<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Restaurant extends \OpenActive\Models\SchemaOrg\FoodEstablishment
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Restaurant";
    }

}
