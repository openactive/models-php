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
    public static function getType()
    {
        return "schema:EndorsementRating";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
