<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CoverArt extends \OpenActive\Models\SchemaOrg\VisualArtwork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CoverArt";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
