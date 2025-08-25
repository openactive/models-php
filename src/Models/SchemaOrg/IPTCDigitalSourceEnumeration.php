<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class IPTCDigitalSourceEnumeration extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:IPTCDigitalSourceEnumeration";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
