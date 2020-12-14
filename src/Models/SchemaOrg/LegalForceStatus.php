<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LegalForceStatus extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:LegalForceStatus";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
