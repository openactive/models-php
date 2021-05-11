<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ComicSeries extends \OpenActive\Models\SchemaOrg\Periodical
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ComicSeries";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
