<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EventSeries extends \OpenActive\Models\SchemaOrg\Series
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:EventSeries";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
