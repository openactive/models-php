<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GovernmentOffice extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:GovernmentOffice";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
