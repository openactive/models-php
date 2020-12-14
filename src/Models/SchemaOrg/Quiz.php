<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Quiz extends \OpenActive\Models\SchemaOrg\LearningResource
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Quiz";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
