<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Syllabus extends \OpenActive\Models\SchemaOrg\LearningResource
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Syllabus";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
