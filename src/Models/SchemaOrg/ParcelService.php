<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ParcelService extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ParcelService";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
