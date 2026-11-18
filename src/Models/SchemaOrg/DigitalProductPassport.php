<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DigitalProductPassport extends \OpenActive\Models\SchemaOrg\Certification
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DigitalProductPassport";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
