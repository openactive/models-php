<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GameServerStatus extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:GameServerStatus";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
