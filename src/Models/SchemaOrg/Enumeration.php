<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Enumeration extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Enumeration";
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
     * @var \OpenActive\Enums\PropertyEnumeration|\OpenActive\Models\SchemaOrg\Enumeration|\OpenActive\Models\SchemaOrg\Class|null
     */
    protected $supersededBy;

    /**
     * @return \OpenActive\Enums\PropertyEnumeration|\OpenActive\Models\SchemaOrg\Enumeration|\OpenActive\Models\SchemaOrg\Class|null
     */
    public function getSupersededBy()
    {
        return $this->supersededBy;
    }

    /**
     * @param \OpenActive\Enums\PropertyEnumeration|\OpenActive\Models\SchemaOrg\Enumeration|\OpenActive\Models\SchemaOrg\Class|null $supersededBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSupersededBy($supersededBy)
    {
        $types = [
            "\OpenActive\Enums\PropertyEnumeration",
            "\OpenActive\Models\SchemaOrg\Enumeration",
            "\OpenActive\Models\SchemaOrg\Class",
            "null",
        ];

        $supersededBy = self::checkTypes($supersededBy, $types);

        $this->supersededBy = $supersededBy;
    }

}
