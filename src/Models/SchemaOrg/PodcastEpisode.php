<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PodcastEpisode extends \OpenActive\Models\SchemaOrg\Episode
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PodcastEpisode";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
