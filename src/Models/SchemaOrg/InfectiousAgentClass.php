<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class InfectiousAgentClass extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:InfectiousAgentClass";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
