<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Class extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Class";
    }

    public static function fieldList() {
        $fields = [
            "supersededBy" => "supersededBy",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Class|\OpenActive\Models\SchemaOrg\Enumeration|string
     */
    protected $supersededBy;

    /**
     * @return \OpenActive\Models\SchemaOrg\Class|\OpenActive\Models\SchemaOrg\Enumeration|string
     */
    public function getSupersededBy()
    {
        return $this->supersededBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Class|\OpenActive\Models\SchemaOrg\Enumeration|string $supersededBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSupersededBy($supersededBy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Class",
            "\OpenActive\Models\SchemaOrg\Enumeration",
            "string",
        ];

        $supersededBy = self::checkTypes($supersededBy, $types);

        $this->supersededBy = $supersededBy;
    }

}
