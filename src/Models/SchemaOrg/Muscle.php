<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Muscle extends \OpenActive\Models\SchemaOrg\AnatomicalStructure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Muscle";
    }

    public static function fieldList() {
        $fields = [
            "insertion" => "insertion",
            "nerve" => "nerve",
            "muscleAction" => "muscleAction",
            "antagonist" => "antagonist",
            "bloodSupply" => "bloodSupply",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The place of attachment of a muscle, or what the muscle moves.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AnatomicalStructure
     */
    protected $insertion;

    /**
     * The underlying innervation associated with the muscle.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Nerve
     */
    protected $nerve;

    /**
     * The movement the muscle generates.
     *
     *
     * @var string
     */
    protected $muscleAction;

    /**
     * The muscle whose action counteracts the specified muscle.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Muscle
     */
    protected $antagonist;

    /**
     * The blood vessel that carries blood from the heart to the muscle.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Vessel
     */
    protected $bloodSupply;

    /**
     * @return \OpenActive\Models\SchemaOrg\AnatomicalStructure
     */
    public function getInsertion()
    {
        return $this->insertion;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AnatomicalStructure $insertion
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInsertion($insertion)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AnatomicalStructure",
        ];

        $insertion = self::checkTypes($insertion, $types);

        $this->insertion = $insertion;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Nerve
     */
    public function getNerve()
    {
        return $this->nerve;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Nerve $nerve
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNerve($nerve)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Nerve",
        ];

        $nerve = self::checkTypes($nerve, $types);

        $this->nerve = $nerve;
    }

    /**
     * @return string
     */
    public function getMuscleAction()
    {
        return $this->muscleAction;
    }

    /**
     * @param string $muscleAction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMuscleAction($muscleAction)
    {
        $types = [
            "string",
        ];

        $muscleAction = self::checkTypes($muscleAction, $types);

        $this->muscleAction = $muscleAction;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Muscle
     */
    public function getAntagonist()
    {
        return $this->antagonist;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Muscle $antagonist
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAntagonist($antagonist)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Muscle",
        ];

        $antagonist = self::checkTypes($antagonist, $types);

        $this->antagonist = $antagonist;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Vessel
     */
    public function getBloodSupply()
    {
        return $this->bloodSupply;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Vessel $bloodSupply
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBloodSupply($bloodSupply)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Vessel",
        ];

        $bloodSupply = self::checkTypes($bloodSupply, $types);

        $this->bloodSupply = $bloodSupply;
    }

}
