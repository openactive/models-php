<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ConstraintNode extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ConstraintNode";
    }

    public static function fieldList() {
        $fields = [
            "numConstraints" => "numConstraints",
            "constraintProperty" => "constraintProperty",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates the number of constraints property values defined for a particular [[ConstraintNode]] such as [[StatisticalVariable]]. This helps applications understand if they have access to a sufficiently complete description of a [[StatisticalVariable]] or other construct that is defined using properties on template-style nodes.
     *
     *
     * @var int|null
     */
    protected $numConstraints;

    /**
     * Indicates a property used as a constraint. For example, in the definition of a [[StatisticalVariable]]. The value is a property, either from within Schema.org or from other compatible (e.g. RDF) systems such as DataCommons.org or Wikidata.org. 
     *
     *
     * @var string|\OpenActive\Enums\PropertyEnumeration|null
     */
    protected $constraintProperty;

    /**
     * @return int|null
     */
    public function getNumConstraints()
    {
        return $this->numConstraints;
    }

    /**
     * @param int|null $numConstraints
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumConstraints($numConstraints)
    {
        $types = [
            "int",
            "null",
        ];

        $numConstraints = self::checkTypes($numConstraints, $types);

        $this->numConstraints = $numConstraints;
    }

    /**
     * @return string|\OpenActive\Enums\PropertyEnumeration|null
     */
    public function getConstraintProperty()
    {
        return $this->constraintProperty;
    }

    /**
     * @param string|\OpenActive\Enums\PropertyEnumeration|null $constraintProperty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setConstraintProperty($constraintProperty)
    {
        $types = [
            "string",
            "\OpenActive\Enums\PropertyEnumeration",
            "null",
        ];

        $constraintProperty = self::checkTypes($constraintProperty, $types);

        $this->constraintProperty = $constraintProperty;
    }

}
