<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class StatisticalPopulation extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:StatisticalPopulation";
    }

    public static function fieldList() {
        $fields = [
            "populationType" => "populationType",
            "numConstraints" => "numConstraints",
            "constrainingProperty" => "constrainingProperty",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates the populationType common to all members of a [[StatisticalPopulation]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Class|string
     */
    protected $populationType;

    /**
     * Indicates the number of constraints (not counting [[populationType]]) defined for a particular [[StatisticalPopulation]]. This helps applications understand if they have access to a sufficiently complete description of a [[StatisticalPopulation]].
     *
     *
     * @var int|null
     */
    protected $numConstraints;

    /**
     * Indicates a property used as a constraint to define a [[StatisticalPopulation]] with respect to the set of entities
     *   corresponding to an indicated type (via [[populationType]]).
     *
     *
     * @var int|null
     */
    protected $constrainingProperty;

    /**
     * @return \OpenActive\Models\SchemaOrg\Class|string
     */
    public function getPopulationType()
    {
        return $this->populationType;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Class|string $populationType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPopulationType($populationType)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Class",
            "string",
        ];

        $populationType = self::checkTypes($populationType, $types);

        $this->populationType = $populationType;
    }

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
     * @return int|null
     */
    public function getConstrainingProperty()
    {
        return $this->constrainingProperty;
    }

    /**
     * @param int|null $constrainingProperty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setConstrainingProperty($constrainingProperty)
    {
        $types = [
            "int",
            "null",
        ];

        $constrainingProperty = self::checkTypes($constrainingProperty, $types);

        $this->constrainingProperty = $constrainingProperty;
    }

}
