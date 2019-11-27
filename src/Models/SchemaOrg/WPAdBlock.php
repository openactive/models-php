<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class WPAdBlock extends \OpenActive\Models\SchemaOrg\WebPageElement
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:WPAdBlock";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
