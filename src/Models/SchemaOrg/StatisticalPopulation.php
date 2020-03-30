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
            "constrainingProperty" => "constrainingProperty",
            "numConstraints" => "numConstraints",
            "populationType" => "populationType",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates a property used as a constraint to define a <a class="localLink" href="https://schema.org/StatisticalPopulation">StatisticalPopulation</a> with respect to the set of entities
     *   corresponding to an indicated type (via <a class="localLink" href="https://schema.org/populationType">populationType</a>).
     *
     *
     * @var null|int
     */
    protected $constrainingProperty;

    /**
     * Indicates the number of constraints (not counting <a class="localLink" href="https://schema.org/populationType">populationType</a>) defined for a particular <a class="localLink" href="https://schema.org/StatisticalPopulation">StatisticalPopulation</a>. This helps applications understand if they have access to a sufficiently complete description of a <a class="localLink" href="https://schema.org/StatisticalPopulation">StatisticalPopulation</a>.
     *
     *
     * @var null|int
     */
    protected $numConstraints;

    /**
     * Indicates the populationType common to all members of a <a class="localLink" href="https://schema.org/StatisticalPopulation">StatisticalPopulation</a>.
     *
     *
     * @var 
     */
    protected $populationType;

    /**
     * @return null|int
     */
    public function getConstrainingProperty()
    {
        return $this->constrainingProperty;
    }

    /**
     * @param null|int $constrainingProperty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setConstrainingProperty($constrainingProperty)
    {
        $types = array(
            "null",
            "int",
        );

        $constrainingProperty = self::checkTypes($constrainingProperty, $types);

        $this->constrainingProperty = $constrainingProperty;
    }

    /**
     * @return null|int
     */
    public function getNumConstraints()
    {
        return $this->numConstraints;
    }

    /**
     * @param null|int $numConstraints
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumConstraints($numConstraints)
    {
        $types = array(
            "null",
            "int",
        );

        $numConstraints = self::checkTypes($numConstraints, $types);

        $this->numConstraints = $numConstraints;
    }

    /**
     * @return 
     */
    public function getPopulationType()
    {
        return $this->populationType;
    }

    /**
     * @param  $populationType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPopulationType($populationType)
    {
        $types = array(
        );

        $populationType = self::checkTypes($populationType, $types);

        $this->populationType = $populationType;
    }

}
