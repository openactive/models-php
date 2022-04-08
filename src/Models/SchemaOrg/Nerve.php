<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Nerve extends \OpenActive\Models\SchemaOrg\AnatomicalStructure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Nerve";
    }

    public static function fieldList() {
        $fields = [
            "sensoryUnit" => "sensoryUnit",
            "branch" => "branch",
            "sourcedFrom" => "sourcedFrom",
            "nerveMotor" => "nerveMotor",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The neurological pathway extension that inputs and sends information to the brain or spinal cord.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\SuperficialAnatomy|\OpenActive\Models\SchemaOrg\AnatomicalStructure|string
     */
    protected $sensoryUnit;

    /**
     * The branches that delineate from the nerve bundle. Not to be confused with [[branchOf]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AnatomicalStructure|string
     */
    protected $branch;

    /**
     * The neurological pathway that originates the neurons.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BrainStructure|string
     */
    protected $sourcedFrom;

    /**
     * The neurological pathway extension that involves muscle control.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Muscle|string
     */
    protected $nerveMotor;

    /**
     * @return \OpenActive\Models\SchemaOrg\SuperficialAnatomy|\OpenActive\Models\SchemaOrg\AnatomicalStructure|string
     */
    public function getSensoryUnit()
    {
        return $this->sensoryUnit;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\SuperficialAnatomy|\OpenActive\Models\SchemaOrg\AnatomicalStructure|string $sensoryUnit
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSensoryUnit($sensoryUnit)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\SuperficialAnatomy",
            "\OpenActive\Models\SchemaOrg\AnatomicalStructure",
            "string",
        ];

        $sensoryUnit = self::checkTypes($sensoryUnit, $types);

        $this->sensoryUnit = $sensoryUnit;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AnatomicalStructure|string
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AnatomicalStructure|string $branch
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBranch($branch)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AnatomicalStructure",
            "string",
        ];

        $branch = self::checkTypes($branch, $types);

        $this->branch = $branch;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\BrainStructure|string
     */
    public function getSourcedFrom()
    {
        return $this->sourcedFrom;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BrainStructure|string $sourcedFrom
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSourcedFrom($sourcedFrom)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BrainStructure",
            "string",
        ];

        $sourcedFrom = self::checkTypes($sourcedFrom, $types);

        $this->sourcedFrom = $sourcedFrom;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Muscle|string
     */
    public function getNerveMotor()
    {
        return $this->nerveMotor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Muscle|string $nerveMotor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNerveMotor($nerveMotor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Muscle",
            "string",
        ];

        $nerveMotor = self::checkTypes($nerveMotor, $types);

        $this->nerveMotor = $nerveMotor;
    }

}
