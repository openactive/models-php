<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ComicCoverArt extends \OpenActive\Models\SchemaOrg\CoverArt
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ComicCoverArt";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
