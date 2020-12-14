<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ReservationStatusType extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ReservationStatusType";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
