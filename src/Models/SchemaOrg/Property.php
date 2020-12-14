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
            "inverseOf" => "inverseOf",
            "rangeIncludes" => "rangeIncludes",
            "supersededBy" => "supersededBy",
            "domainIncludes" => "domainIncludes",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Relates a property to a property that is its inverse. Inverse properties relate the same pairs of items to each other, but in reversed direction. For example, the 'alumni' and 'alumniOf' properties are inverseOf each other. Some properties don't have explicit inverses; in these situations RDFa and JSON-LD syntax for reverse properties can be used.
     *
     *
     * @var string
     */
    protected $inverseOf;

    /**
     * Relates a property to a class that constitutes (one of) the expected type(s) for values of the property.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Class
     */
    protected $rangeIncludes;

    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Class|\OpenActive\Models\SchemaOrg\Enumeration|string
     */
    protected $supersededBy;

    /**
     * Relates a property to a class that is (one of) the type(s) the property is expected to be used on.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Class
     */
    protected $domainIncludes;

    /**
     * @return string
     */
    public function getInverseOf()
    {
        return $this->inverseOf;
    }

    /**
     * @param string $inverseOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInverseOf($inverseOf)
    {
        $types = [
            "string",
        ];

        $inverseOf = self::checkTypes($inverseOf, $types);

        $this->inverseOf = $inverseOf;
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

}
