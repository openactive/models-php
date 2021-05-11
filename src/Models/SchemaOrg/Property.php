<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Property extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Property";
    }

    public static function fieldList() {
        $fields = [
            "supersededBy" => "supersededBy",
            "rangeIncludes" => "rangeIncludes",
            "domainIncludes" => "domainIncludes",
            "inverseOf" => "inverseOf",
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
     * Relates a property to a class that constitutes (one of) the expected type(s) for values of the property.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Class
     */
    protected $rangeIncludes;

    /**
     * Relates a property to a class that is (one of) the type(s) the property is expected to be used on.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Class
     */
    protected $domainIncludes;

    /**
     * Relates a property to a property that is its inverse. Inverse properties relate the same pairs of items to each other, but in reversed direction. For example, the 'alumni' and 'alumniOf' properties are inverseOf each other. Some properties don't have explicit inverses; in these situations RDFa and JSON-LD syntax for reverse properties can be used.
     *
     *
     * @var \OpenActive\Enums\PropertyEnumeration|null
     */
    protected $inverseOf;

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

    /**
     * @return \OpenActive\Models\SchemaOrg\Class
     */
    public function getRangeIncludes()
    {
        return $this->rangeIncludes;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Class $rangeIncludes
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRangeIncludes($rangeIncludes)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Class",
        ];

        $rangeIncludes = self::checkTypes($rangeIncludes, $types);

        $this->rangeIncludes = $rangeIncludes;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Class
     */
    public function getDomainIncludes()
    {
        return $this->domainIncludes;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Class $domainIncludes
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDomainIncludes($domainIncludes)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Class",
        ];

        $domainIncludes = self::checkTypes($domainIncludes, $types);

        $this->domainIncludes = $domainIncludes;
    }

    /**
     * @return \OpenActive\Enums\PropertyEnumeration|null
     */
    public function getInverseOf()
    {
        return $this->inverseOf;
    }

    /**
     * @param \OpenActive\Enums\PropertyEnumeration|null $inverseOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInverseOf($inverseOf)
    {
        $types = [
            "\OpenActive\Enums\PropertyEnumeration",
            "null",
        ];

        $inverseOf = self::checkTypes($inverseOf, $types);

        $this->inverseOf = $inverseOf;
    }

}
